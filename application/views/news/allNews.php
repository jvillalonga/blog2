<h3>Todos los artículos</h3>
<div class="article">
  <table id="taula">
    <thead>
      <tr>
        <th>ID</th>
        <th>Artículo</th>
        <th>Fecha</th>
        <th>Autor</th>
        <th>Info</th>
        <th>Enlace</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($news as $news_item): ?>
        <tr>
          <td><?php echo $news_item['id']; ?></td>
          <td><?php echo $news_item['title']; ?></td>
          <td><?php echo $news_item['fecha']; ?></td>
          <td><?php echo $news_item['autor']; ?></td>
          <td><?php echo substr($news_item['text'],0,25).' ...'; ?></td>
          <td><a href="<?php echo site_url('news/' . $news_item['slug']); ?>">Leer más</a></td>
          <td>
            <!--formulario borrar articulor-->
            <?php if ($this->session->log && $this->session->rol == 1) { ?>
              <form action="borrar" method="post">
                <input type="hidden" name="id" value="<?php echo $news_item['id'] ?>"/>
                <input type = "submit" name = "submit" value = "Borrar" />
              </form>
            <?php } ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
