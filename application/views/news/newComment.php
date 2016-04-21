<div class="comment">
  <form action="../creaComment" method="post">

      <legend>Nuevo comentario</legend>
      <input name="idArt" type="hidden" value="<?php echo $news_item['id']; ?>"/>
      <input name="slug" type="hidden" value="<?php echo $news_item['slug']; ?>"/>
      <input type="input" name="user" placeholder="Autor" value="<?php
      if (isset($_SESSION["log"]) && $_SESSION["log"] == 'ok') {
        echo $_SESSION["user"] . '" readonly=""';
      }
      ?>"/><br />
      <textarea name="comments" id="comments" placeholder="Comentario" cols="25" rows="6" required></textarea><br />
      <p>Click para insertar:</p>
      <?php echo $smiley_table; ?>
      <input type="submit" value="Añadir comentario"/>
  </form>
</div>
