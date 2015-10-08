<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        header("X-XSS-Protection: 1 mode=block ");
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header("Content-Security-Policy: script-src 'self' http://fonts.googleapis.com 'unsafe-inline' 'unsafe-eval';");
        header("Cache-Control: no-cache");
        header("Pragma: no-cache");
        session_start();
        session_regenerate_id(true);
        if (!isset($_SESSION['id']))
            header('location:complaint');
        else if ($_SESSION['user_type'] == 'student') {
            header('location:student');
            die();
        }
        $this->load->model('Admin_model');
    }
    function format_date($str) {
        $month = array(" ", "Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec");
        $y = explode(' ', $str);
        $x = explode('-', $y[0]);
        $date = "";
        $m = (int) $x[1];
        $m = $month[$m];
        $st = array(1, 21, 31);
        $nd = array(2, 22);
        $rd = array(3, 23);
        if (in_array($x[2], $st)) {
            $date = $x[2] . 'st';
        } else if (in_array($x[2], $nd)) {
            $date .= $x[2] . 'nd';
        } else if (in_array($x[2], $rd)) {
            $date .= $x[2] . 'rd';
        } else {
            $date .= $x[2] . 'th';
        }
        $date .= ' ' . $m . ' ' . $x[0];
        return $date;
    }
    public function string_validate($str) {
        $str = filter_var($str, FILTER_SANITIZE_STRING);
        $str1 = str_replace("%", "p", "$str");
        /* @var $mysqli type */
        $str1 = $this->db->escape($str1);
        return str_replace("'", "", $str1);
    }
    function valid_pass($candidate) {
        if (!preg_match_all('$\S*(?=\S{6,})(?=\S*[a-z])(?=\S*[\d])\S*$', $candidate))
            return FALSE;
        return TRUE;
    }

    public function popup() {
        
    }

    public function clean_database($page = 'clean') {
        if (!file_exists(APPPATH . '/views/admin/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/user_header', $data);
        $this->load->view('admin/' . $page, $data);
        $this->load->view('templates/footer');
    }

    public function profile($page = 'profile') {
        if (!file_exists(APPPATH . '/views/admin/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $data = $this->Admin_model->getProfile();
        $data['title'] = ucfirst($page);
        $this->load->view('templates/user_header', $data);
        $this->load->view('admin/' . $page, $data);
        $this->load->view('templates/footer');
        unset($_SESSION['matcherr']);
        unset($_SESSION['passerr']);
        unset($_SESSION['olderr']);
        unset($_SESSION['success']);
    }
    public function updateProfile() {
        $oldpass = $this->input->post('oldpass');
        $pass = $this->input->post('pass');
        $repass = $this->input->post('repass');
        $data = $this->Admin_model->getProfile();
        if (isset($oldpass)) {
            $salt = "thispasswordcannotbehacked";
            $oldpass = hash('sha256', $salt . $oldpass);
            if ($data['pass'] != $oldpass) {
                $_SESSION['olderr'] = "Your password doesnot match your previous password.";
            } else
                $_SESSION['olderr'] = '';
            if (isset($pass) && isset($repass)) {
                if ($pass == $repass)
                    $_SESSION['matcherr'] = '';
                else
                    $_SESSION['matcherr'] = "Passwords do not match. Please try again";
                if ($this->valid_pass($pass))
                    $_SESSION['passerr'] = '';
                else
                    $_SESSION['passerr'] = "Password is not valid. ";
                if ($_SESSION['passerr'] == '') {
                    $salt = "thispasswordcannotbehacked";
                    $pass = hash('sha256', $salt . $pass);
                    $this->Admin_model->updatePro($pass);
                }
                redirect(base_url() . 'index.php/admin/profile');
            }
        }
    }
    
}
?>