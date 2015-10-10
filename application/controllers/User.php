<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        header("X-XSS-Protection: 1 mode=block ");
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header("Content-Security-Policy: script-src 'self' http://fonts.googleapis.com 'unsafe-inline';");
        header("Expires: Mon, 26 Jul 2014 05:00:00 GMT");
        header('Cache-Control: max-age=604800');
        header("Pragma: no-cache");
        session_start();
        session_regenerate_id(true);
        $this->load->model('User_model');
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

    function string_validate($str) {
        $str = filter_var($str, FILTER_SANITIZE_STRING);
        $str1 = str_replace("%", "p", "$str");
        $str = $this->db->escape($str1);
        return str_replace("'", '', $str);
    }

    function valid_pass($candidate) {
        if (!preg_match_all('$\S*(?=\S{6,})(?=\S*[a-z])(?=\S*[\d])\S*$', $candidate))
            return FALSE;
        return TRUE;
    }

    function checkSession() {
        if (isset($_SESSION['usertype'])) {
            if ($_SESSION['usertype'] == 'user') {
                header('location: ' . base_url() . 'index.php/user');
                die();
            } else if ($_SESSION['usertype'] == 'admin') {
                header('location: ' . base_url() . 'index.php/admin');
                die();
            }
        }
    }

    public function index($page = 'index') {
        if (!file_exists(APPPATH . '/views/user/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $data['title'] = ucfirst("Welcome"); // Capitalize the first letter
        $data['question']=  $this->User_model->getQuestions();
        $this->load->view('templates/user_header', $data);
        $this->load->view('user/' . $page, $data);
        $this->load->view('templates/user_footer');
    }
    
    public function profile($page = 'profile') {
        if (!file_exists(APPPATH . '/views/user/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $data['title'] = ucfirst("My Profile"); // Capitalize the first letter
        $this->load->view('templates/user_header', $data);
        $this->load->view('user/' . $page, $data);
        $this->load->view('templates/user_footer');
    }
    
    public function browse($page = 'browse') {
        if (!file_exists(APPPATH . '/views/user/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $data['title'] = ucfirst("browse"); // Capitalize the first letter
        $this->load->view('templates/user_header', $data);
        $this->load->view('user/' . $page, $data);
        $this->load->view('templates/user_footer');
    }
    
    public function question($qtitle, $qid, $page = 'viewQuestion') {
        if (!file_exists(APPPATH . '/views/user/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $data['title'] = ucfirst("browse"); // Capitalize the first letter
        $data['question']= $this->User_model->getQuestionData($qid);
        $data['answer']= $this->User_model->getAnswerData($qid);
        $this->load->view('templates/user_header', $data);
        $this->load->view('user/' . $page, $data);
        $this->load->view('templates/user_footer');
    }
    
    public function addQuestion() {
        $data= $this->input->post();
        if($data['title']==""){
            echo "titleErr";
        }
        else if($data['cat']==""){
            echo "catErr";
        }
        else if($data['ques']==""){
            echo "quesErr";
        }
        else{
            $this->User_model->insertQuestion($data['title'],$data['ques'],$data['cat']);            
            echo "SUCCESS";
        }
    }


}
