	<?php if ($this->session->flashdata('error_message')): ?>
		<br>
		<div class="alert alert-danger alert-dismissable">
			<span class="close" data-dismiss="alert">x</span>
			<?php echo $this->session->flashdata('error_message'); ?>
		</div>
	<?php endif ?>


	<?php if ($this->session->flashdata('message_display')): ?>
		<br>
		<div class="alert alert-success alert-dismissable">
			<span class="close" data-dismiss="alert">x</span>
			<?php echo $this->session->flashdata('message_display'); ?>
		</div>
	<?php endif ?>

	<?php if (isset($error_message)): ?>
		<br>
		<div class="alert alert-danger alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
			<?php echo $error_message; ?>
		</div>
	<?php endif ?>

	<?php if (validation_errors() != NULL): ?>
		<br>
		<div class="alert alert-danger alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
			<?php echo validation_errors(); ?>
		</div>
	<?php endif ?>

	<center>
	<br>
	<br>
	
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="well well-lg" style="vertical-align: middle">
				<h1 style="padding-bottom: 20px;">NEW USER LOGIN</h1>
				<!-- <form action="/new_login" class="form-horizontal" method="POST"> -->
				<?php echo form_open_multipart(base_url().'new_login', array('class' => 'form-horizontal')); ?>
					<div class="form-group">
						<label for="pp">Photo Profile</label>
						<input type="file" class="form-control" name="pp" placeholder="Chose your photo profile">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" placeholder="Type your email">
					</div>
					<!-- <div class="form-group">
						<label for="old_pwd">Old Password</label>
						<input type="password" class="form-control" name="old_pwd" placeholder="Type your old password">
					</div> -->
					<div class="form-group">
						<label for="new_pwd">New Password</label>
						<input type="password" class="form-control" name="new_pwd" placeholder="Type your new password">
					</div>
					<div class="form-group">
						<label for="conf_pwd">Confirm New Password</label>
						<input type="password" class="form-control" name="conf_pwd" placeholder="Type your new password">
					</div>
					<?php 
					if (isset($data['error_message'])) { ?>
						<div class="form-group">
							<label for="error"><?php echo $data['error_message']; ?></label>
						</div>
					<?php } ?>
					<input type="submit" value="Submit" class="btn btn-warning" name="submit">
				</form>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</center>

	<style type="text/css">
		body {
			background-color: #393639;
			color: #FFD51E;
		}

	</style>