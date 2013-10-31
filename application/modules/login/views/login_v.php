<a href="<?php echo base_url();?>" target="_blank" class="logo"> <img src="<?php echo base_url().'assets/images/logo.jpg' ?>"  /> </a>
<div class="container">
	<?php echo form_open('login/authenticate');?>
	<?php echo form_fieldset('', array('id' => 'login_legend'));?>
	<legend id="login_legend">
		Log In
	</legend>
	<div class="item">
		<?php echo form_error('all_errors', '<div class="error_message">', '</div>');?>
		<?php echo form_error('username', '<div class="error_message">', '</div>');?>
		<?php echo form_label('Username:', 'username');?>
		<?php echo form_input(array('name' => 'username', 'id' => 'username', 'size' => '24', 'class' => 'textfield', 'placeholder' => 'username'));?>
	</div>
	<div class="item">
		<?php echo form_error('password', '<div class="error_message">', '</div>');?>
		<?php echo form_label('Password:', 'password');?>
		<?php echo form_password(array('name' => 'password', 'id' => 'password', 'size' => '24', 'class' => 'textfield', 'placeholder' => '********'));?>
	</div>
	<?php echo form_fieldset_close();?>
	<?php echo form_fieldset('', array('class' => 'tblFooters'));?>
	<?php echo form_submit('input_go', 'Go');?>
	<?php echo form_fieldset_close();?>
	<?php echo form_close();?>
</div>