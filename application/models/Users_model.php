<?php

class Users_model extends CI_Model {
    
     public function __construct() {
        $this->load->helper('date');
        $this->load->database();
    }
    public function get_user() {

        $user = $this->input->post('user');
        $pass = $this->input->post('pass');

        $this->db->count_all_results('users');
        $this->db->where('user', $user);
        $this->db->where('pass', MD5($pass));
        $this->db->from('users');
        $query = $this->db->count_all_results();
        return $query;
    }
}