 	<?php if ($this->session->flashdata('error_message')): ?>
 		<div class="alert alert-danger alert-dismissable">
 			<span class="close" data-dismiss="alert">x</span>
 			<?php echo $this->session->flashdata('error_message'); ?>
 		</div>
 	<?php endif ?>

	<?php if (isset($error_message)): ?>
		<div class="alert alert-danger alert-dismissable">
			<span class="close" data-dismiss="alert">x</span>
			<?php echo $error_message; ?>
		</div>
	<?php endif ?>

	<?php if (validation_errors() != NULL): ?>
		<div class="alert alert-danger alert-dismissable">
			<span class="close" data-dismiss="alert">x</span>
			<?php echo validation_errors(); ?>
		</div>
	<?php endif ?>
	<div class="login-box">
		<div class="login-container">
			<div class="title">Log in to CBS 2017</div>
			<form action="<?php echo base_url() ?>login" class="form-horizontal" method="POST">
				<div class="form-group">
					<label for="npm">NPM</label>
					<input type="text" class="form-control" id="npm" placeholder="e.g 140810xxxxxx" name="npm">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" placeholder="Password" name="password">
				</div>
				<?php 
				if (isset($data['error_message'])) { ?>
					<div class="form-group">
						<label for="error"><?php echo $data['error_message']; ?></label>
					</div>
				<?php } ?>
				<div class="form-group">
					<input type="submit" value="Log In" class="btn btn-warning btn-login">
				</div>
				<a href="#" class="forgot">Forgot Password?</a>
			</form>
		</div>
	</div>