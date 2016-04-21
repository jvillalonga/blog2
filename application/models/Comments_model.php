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

    $text = stripslashes(nl2br(trim( $this->input->post('comments'))));
    //$string = $this->typography->nl2br_except_pre(trim( $this->input->post('text')));

    $data = array(
      'idArticulo' => $this->input->post('idArt'),
      'user' => $user,
      'fecha' => $date,
      'text' => $text
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
