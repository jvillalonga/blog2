
<html>
<head>
  <title>MyBlog</title>
  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
</head>
<body>
  <div id="content">
<!-- header -->
    <div id="header">
      <div>
        <h1>
          <div id="logo">
             <img src="<?php echo base_url(); ?>assets/img/kitmaker_logo.png" alt="logo">
          </div>Blog</h1>
        <p class="info">
          <?php
          if (isset($this->session->log) && $this->session->log == 'ok') {
            echo 'Usuario: ' . $this->session->log;
          }
          ?>
        </p>
      </div>
<!-- menu -->
      <div id="menu">
        <nav>
          <ul>
            <li><a href="<?php echo site_url('news'); ?>">Inicio</a></li>
            <li><a href="<?php echo site_url('news/allNews'); ?>">Todos los artículos</a></li>
            <li><a href="<?php echo site_url('news/create'); ?>">Publicar artículo</a></li>
            <li>
              <?php
              if (isset($this->session->log) && $this->session->log == 'ok') {
                echo '<a href="' . site_url('news/logout');
                echo '">Logout</a>';
              } else {
                echo '<a href="' . site_url('news/login');
                echo '">Login</a>/<a href="' . site_url('news/register');
                echo '">Registrarse</a>';
              }
              ?>
            </li>
          </ul>
        </nav>
      </div>
    </div>
<!-- contenido -->
    <div id="main">
