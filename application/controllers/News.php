<?php

class News extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('articles_model');
        $this->load->model('comments_model');
        $this->load->model('users_model');
        $this->load->helper('url_helper');
        $this->load->helper('date');
        $this->load->library('session');
    }

    public function index() {
        $data['news'] = $this->articles_model->get_last_articles();
        $data['title'] = 'Inicio';

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/deviceInfo');
        $this->load->view('templates/footer');
    }

//funcion para mostrar todos los articulos
    public function allNews() {
        $data['news'] = $this->articles_model->get_articles();
        $data['title'] = 'Blog';

        $this->load->view('templates/header', $data);
        $this->load->view('news/allNews');
        $this->load->view('templates/deviceInfo');
        $this->load->view('templates/footer');
    }

//funcion para mostrar articulos
    public function view($slug = NULL) {
        $data['news_item'] = $this->articles_model->get_articles($slug);

        if (empty($data['news_item'])) {
            show_404();
        }

        $data['title'] = $data['news_item']['title'];
        $data['id'] = $data['news_item']['id'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('news/viewComments', $data);
        $this->load->view('templates/deviceInfo');
        $this->load->view('templates/footer');
    }

//funcion para crear articulo
    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Publicar artículo';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('news/create');
            $this->load->view('templates/footer');
        } else {
            $this->articles_model->set_article();
            $this->load->view('news/success');
        }
    }

//funcion para borrar articulo
    public function borrar() {
        $this->load->helper('form');
        $this->articles_model->del_article($this->input->post('id'));

        $this->load->view('news/success');
    }

//funcion para registrar usuarios
    public function register() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Registro';

        $this->form_validation->set_rules('user', 'User', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('news/register');
            $this->load->view('templates/footer');
        } else {
            if ($this->users_model->get_userName() === 1) {
                $this->load->view('news/logError');
            } else {
                $this->users_model->set_user();
                $this->load->view('news/success');
            }
        }
    }

//comprobacion de login
    public function login() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Log in';

        $this->form_validation->set_rules('user', 'User', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('news/login');
            $this->load->view('templates/footer');
        } else {
            if ($this->users_model->get_user() === 1) {
                $_SESSION["log"] = 'ok';
                $_SESSION["user"] = $this->input->post('user');
                $this->load->view('news/logSuccess');
            }
            if ($this->users_model->get_user() === 0) {
                $this->load->view('news/logError');
            }
        }
    }

//funcion para crear comentario
    public function creaComment() {

        $this->comments_model->set_comments();
        $this->load->view('news/success');
    }

//funcion para borrar comentario

    public function borrarComment() {
        $id = $this->input->post('id');
        $this->load->helper('form');
        $this->comments_model->del_comments($id);

        $this->load->view('news/success');
    }

//cerrar sesion
    public function logout() {
        $this->session->sess_destroy();
        echo '<p>Logout correcto.</p><a href="' . site_url('news') . '">Inicio</a>';
    }

}
