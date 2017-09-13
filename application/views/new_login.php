	<?php if ($this->session->flashdata('error_message')): ?>
		<div class="alert alert-danger alert-dismissable">
			<span class="close" data-dismiss="alert">x</span>
			<?php echo $this->session->flashdata('error_message'); ?>
		</div>
	<?php endif ?>


	<?php if ($this->session->flashdata('message_display')): ?>
		<div class="alert alert-success alert-dismissable">
			<span class="close" data-dismiss="alert">x</span>
			<?php echo $this->session->flashdata('message_display'); ?>
		</div>
	<?php endif ?>

	<?php if (isset($error_message)): ?>
		<div class="alert alert-danger alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
			<?php echo $error_message; ?>
		</div>
	<?php endif ?>

	<?php if (validation_errors() != NULL): ?>
		<div class="alert alert-danger alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
			<?php echo validation_errors(); ?>
		</div>
	<?php endif ?>
		<div class="login-box" id="new-login">
			<div class="login-container">
				<div class="title">New User Login</div>
				<!-- <form action="/new_login" class="form-horizontal" method="POST"> -->
				<?php echo form_open_multipart(base_url().'new_login/submit', array('class' => 'form-horizontal')); ?>
					<div class="form-group">
						<label for="pp">Photo Profile</label>
						<input type="file" class="form-control" name="pp" placeholder="Choose your photo profile">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" placeholder="Type your email">
					</div>
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
					<div class="form-group">
						<input type="submit" value="Submit" class="btn btn-success btn-login" name="submit">
					</div>
				</form>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</center>