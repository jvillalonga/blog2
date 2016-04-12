
<h3>Comentarios</h3>
<div class="article">
    <?php
    $comments = $this->comments_model->get_comments($id);


    foreach ($comments as $comments_item):
        ?>
        <div class="comment">
            <p>Autor: <?php echo $comments_item['user']; ?></p>
            <p class="infoArt"><?php echo $comments_item['fecha']; ?></p>
            <p>
                <?php echo $comments_item['text']; ?>
            </p>
            <?php if (isset($this->session->log) && $this->session->log == 'ok') { ?>
                <form action="borrarComment" method="post">
                    <input type="hidden" name="id" value="<?php echo $comments_item['id'] ?>"/>
                    <input type = "submit" name = "submit" value = "Borrar comentario" />
                    <input name="slug" type="hidden" value="<?php echo $news_item['slug']; ?>"/>
                </form>
            <?php }
            ?>
        </div>
    <?php endforeach; ?>
    <?php $this->load->view('news/newComment'); ?>
</div>