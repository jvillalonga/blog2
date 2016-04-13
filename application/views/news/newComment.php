<div class="comment">
  <form action="creaComment" method="post">
    <fieldset>
      <legend>Nuevo comentario</legend>
      <input name="idArt" type="hidden" value="<?php echo $news_item['id']; ?>"/>
      <input name="slug" type="hidden" value="<?php echo $news_item['slug']; ?>"/>
      <input type="input" name="user" placeholder="Autor" value="<?php
      if (isset($_SESSION["log"]) && $_SESSION["log"] == 'ok') {
        echo $_SESSION["user"];
      }
      ?>"/><br />
      <textarea name="text" placeholder="Comentario" required></textarea><br />
      <input type="submit" value="Añadir comentario"/>
    </fieldset>
  </form>
</div>
