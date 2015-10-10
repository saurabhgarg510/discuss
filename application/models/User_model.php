<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    function insertQuestion($title,$ques,$cat){
        $this->db->query("insert into question (title,question,categories,email) values ('".$title."','".$ques."','".$cat."','".$_SESSION['email']."')");
    }
    
    function insertAnswer($ans,$qid){
        $this->db->query("insert into answer (qid,answer,email) values ('".$qid."','".$ans."','".$_SESSION['email']."')");
    }
    
    function updateQuestion($ques, $category){
        $data=array('question'=>$ques,'category'=>$category);
        $this->db->update('questions',$data);
    }
    
    function updateAnswer($ans, $category){
        $data=array('answer'=>$ans,'category'=>$category);
        $this->db->update('questions',$data);
    }
    
    function upvoteQuestion($qid){
        $this->db->query('update question set upvotes = upvotes +1 where qid = "$qid"');
    }
    function downvoteQuestion($qid){
        $this->db->query('update question set downvotes = downvotes +1 where qid = "$qid"');
    }
    function upvoteAnswer($qid){
        $this->db->query('update answer set upvotes = upvotes +1 where aid = "$qid"');
    }
    function downvoteAnswer($qid){
        $this->db->query('update answer set downvotes = downvotes +1 where aid = "$qid"');
    }
    
    function getQuestions(){
        $query=$this->db->query("select * from question where email='".$_SESSION['email']."'");
        $data=array();
        foreach($query->result_array() as $row){
            array_push($data,$row);
        }
        return $data;
    }
    
    function getQuestionData($qid){
        $query=$this->db->query("select * from question where qid=$qid");
        return $query->row_array();
    }
    
    function getAnswerData($qid){
        $query=$this->db->query("select * from answer where qid=$qid");
        $data=array();
        foreach($query->result_array() as $row){
            array_push($data,$row);
        }
        return $data;
    }
}