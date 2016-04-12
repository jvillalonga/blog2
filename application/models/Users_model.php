<?php

class Users_model extends CI_Model {

    public function __construct() {
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

    //seter de usuario
    public function set_user() {
        $this->load->helper('url');

        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        if ($this->users_model->get_userName($user) === 1) {
            echo '<script language="javascript">alert("bad user");</script>';
        } else {
            $data = array(
                'user' => $user,
                'pass' => MD5($pass)
            );
            return $this->db->insert('users', $data);
        }
    }
    
    //comprueba si existe el usuario
    public function get_userName() {
        $user = $this->input->post('user');
        
        $this->db->count_all_results('users');
        $this->db->where('user', $user);
        $this->db->from('users');
        $query = $this->db->count_all_results();
        return $query;
    }

}
