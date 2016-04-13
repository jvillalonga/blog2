
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>
<div id="form">
  <?php echo form_open('news/login'); ?>

  <input type="input" name="user" placeholder="User" autofocus/><br />

  <input type="password" name="pass" placeholder="Password"/><br />

  <input type="submit" name="submit" value="Log in" />

</form>
</div>
