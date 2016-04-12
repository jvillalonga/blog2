
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/register'); ?>

<input type="input" name="user" placeholder="User" autofocus/><br />
<input type="password" name="pass" placeholder="Password"/><br />

<input type="submit" name="submit" value="Registrarse" />

</form>