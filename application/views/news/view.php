<div class="article">
    <?php echo '<h2>' . $news_item['title'] . '</h2>'; ?>
    <p class="infoArt"><?php echo $news_item['fecha']?>, por <?php echo $news_item['autor']; ?></p>
    <?php echo $news_item['text']; ?>

    <p><a href="<?php echo site_url('news/') ?>">Volver</a></p>
</div>
