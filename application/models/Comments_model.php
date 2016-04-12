<?php

class Comments_model extends CI_Model {

    public function __construct() {
        $this->load->helper('date');
        $this->load->database();
    }

    //seter de comentario
    public function set_comments() {
        $this->load->helper('url');
        $date = mdate('%Y-%m-%d', time());
        if ($this->input->post('user') !== '') {
            $user = $this->input->post('user');
        } else {
            $user = 'anonimo';
        }
        $data = array(
            'idArticulo' => $this->input->post('idArt'),
            'user' => $user,
            'fecha' => $date,
            'text' => $this->input->post('text')
        );

        return $this->db->insert('comentarios', $data);
    }

//geter de comentarios
    public function get_comments($id) {
        $query = $this->db->get_where('comentarios', array('idArticulo' => $id));
        return $query->result_array();
    }

//eliminar comentario
    public function del_comments($id) {
        $this->db->where('id', $id);
        return $this->db->delete('comentarios');
    }

}
