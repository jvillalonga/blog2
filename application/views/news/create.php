
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <input type="input" name="autor" placeholder="Autor" value="<?php
        if (isset($this->session->log) && $this->session->log == 'ok') {
            echo $this->session->log;
        }
        ?>"/><br />

    <input type="input" name="title" placeholder="Título" autofocus/><br />

    <textarea name="text" placeholder="text"></textarea><br />

    <input type="submit" name="submit" value="Crear artículo" />

</form>