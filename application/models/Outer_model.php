<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Outer_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function validate_user($data) {
        $query = "select * from login where email='" . $data['email'] . "' and password='" . $data['password'] . "'";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            $_SESSION['id'] = session_id();
            $query = 'select * from register where register.email="' . $data['email'] . '"';
            $res = $this->db->query($query);
            $row1 = $res->row();
            $_SESSION['email'] = $data['email'];
            $_SESSION['name'] = $row1->name;
            $_SESSION['usertype'] = $row1->usertype;
            $_SESSION['questions'] = $row1->questions;
            $_SESSION['answers'] = $row1->answers;
            $_SESSION['contact'] = $row1->contact;
            $_SESSION['views'] = $row1->view;
            return $row1->usertype;
        } else
            return '0';
    }

    public function contact($data) {
        return $this->db->insert('contact', $data);
        /* 	$to=$_POST['email'];
          $subject="Regarding your Feedback/Request at Hostel-J online portal";
          $message="We have received your feedback/request. Its being processed and we will get back to you as soon as possible.";
          $headers="From:Hostel-J<developer@onlinehostelj.in>";
          mail($to,$subject,$message,$headers);
          $to="developer@onlinehostelj.in";
          $subject="New request or feedback";
          $message="Name = ".$_POST['name']." Email = ".$_POST['email']." Message = ".$_POST['message'];
          $headers="From:".$_POST['name']."<".$_POST['email'].">";
          mail($to,$subject,$message,$headers); */
    }

    function email_exists($email) {
        $result = $this->db->query("select fname,email from registration where email = '" . $email . "'");
        if ($result->num_rows() >= 1) {
            return $result->row()->fname;
        } else
            return FALSE;
    }

    function updatePass($email, $pass) {
        $this->db->query("update login set pass = '" . $pass . "' where email = '" . $email . "'");
    }

}
