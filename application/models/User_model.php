<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    function insertQuestion($title, $ques, $cat) {
        $this->db->query("insert into question (title,question,categories,email) values ('" . $title . "','" . $ques . "','" . $cat . "','" . $_SESSION['email'] . "')");
    }

    function insertAnswer($ans, $qid) {
        $this->db->query("insert into answer (qid,answer,email) values ('" . $qid . "','" . $ans . "','" . $_SESSION['email'] . "')");
    }

    function updateQuestion($ques, $category) {
        $data = array('question' => $ques, 'category' => $category);
        $this->db->update('questions', $data);
    }

    function updateAnswer($ans, $category) {
        $data = array('answer' => $ans, 'category' => $category);
        $this->db->update('questions', $data);
    }

    function checkQvote($qid) {
        $result = $this->db->query("select * from quesvote where qid=$qid and email=" . $_SESSION['email']);
        if ($result->num_rows() > 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function upvoteQuestion($qid) {
        $this->db->query('update question set upvotes = upvotes +1 where qid =' . $qid);
        $this->db->query("insert into quesvote values (" . $qid . ",'" . $_SESSION['email'] . "', 1,0)");
    }

    function downvoteQuestion($qid) {
        $this->db->query('update question set downvotes = downvotes +1 where qid =' . $qid);
        $this->db->query("insert into quesvote values (" . $qid . ",'" . $_SESSION['email'] . "', 0,1)");
    }

    function upvoteAnswer($qid) {
        $this->db->query('update answer set upvotes = upvotes +1 where aid = ' . $qid);
        $this->db->query("insert into ansvote values (" . $qid . ",'" . $_SESSION['email'] . "', 1,0)");
    }

    function downvoteAnswer($qid) {
        $this->db->query('update answer set downvotes = downvotes +1 where aid = ' . $qid);
        $this->db->query("insert into ansvote values (" . $qid . ",'" . $_SESSION['email'] . "', 0,1)");
    }

    function getQuestions() {
        $query = $this->db->query("select * from question where email='" . $_SESSION['email'] . "'");
        $data = array();
        foreach ($query->result_array() as $row) {
            array_push($data, $row);
        }
        return $data;
    }

    function getAskerName($email) {
        $result = $this->db->query("select * from register where email = '" . $email . "'");
        return $result->row_array();
    }

    function getQuestionData($qid) {
        $query = $this->db->query("select * from question where qid=$qid");
        $this->db->query("update question set view = view +1 where qid = $qid");
        $result = $query->row_array();
        return $result;
    }

    function getAnswerData($qid) {
        $query = $this->db->query("select * from answer where qid=$qid");
        $data = array();
        foreach ($query->result_array() as $row) {
            array_push($data, $row);
        }
        return $data;
    }

    function getNewQues() {
        $query = $this->db->query("select * from question order by qid desc limit 10");
        $data = array();
        foreach ($query->result_array() as $row) {
            array_push($data, $row);
        }
        return $data;
    }

    function getSearch($search) {
        $query = $this->db->query("select * from question where title like '$search' OR question like '$search' ");
        $data = array();
        foreach ($query->result_array() as $row) {
            array_push($data, $row);
        }
        return $data;
    }

}
