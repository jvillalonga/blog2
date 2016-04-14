
<h3>Artículos recientes</h3>
<?php foreach ($news as $news_item): ?>
  <div class="article">
    <h2><?php echo $news_item['title']; ?></h2>
    <p class="infoArt"><?php echo $news_item['fecha']?>, por <?php echo $news_item['autor']; ?></p>
    <div class="main">
      <p>
        <?php echo substr($news_item['text'], 0, 255) . '...'; ?>
      </p>
    </div>
    <p><a href="<?php echo site_url('news/' . $news_item['slug']); ?>">Leer más</a></p>
  </div>
<?php endforeach; ?>
<div class="centered">
  <a href="<?php echo site_url('news/allNews'); ?>">Todos los artículos</a>
</div>
