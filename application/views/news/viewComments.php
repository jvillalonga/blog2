
<h3>Comentarios</h3>
<div class="article">
  <?php
  $comments = $this->comments_model->get_comments($id);


  foreach ($comments as $comments_item):
    ?>
    <div class="comment">
      <div class="foto">
        <img src="<?php echo base_url(); ?>assets/img/user2.svg" alt="user" height="80px" width="80px">
      </div>
      <div>
        <p class="infoArt">Autor: <?php echo $comments_item['user']; ?>,  <?php echo $comments_item['fecha']; ?></p>
        <p>
          <?php echo $comments_item['text']; ?>
        </p>
      </div>
      <?php if (isset($this->session->log) && $this->session->rol == 1) {  ?>
        <form action="borrarComment" method="post">
          <input type="hidden" name="id" value="<?php echo $comments_item['id'] ?>"/>
          <input type = "submit" name = "submit" value = "Borrar comentario" />
          <input name="slug" type="hidden" value="<?php echo $news_item['slug']; ?>"/>
        </form>
      <?php } ?>
    </div>
  <?php endforeach; ?>
  <?php $this->load->view('news/newComment'); ?>
</div>
