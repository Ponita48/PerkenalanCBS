
 	<?php if ($this->session->flashdata('error_message')): ?>
 		<br>
 		<div class="alert alert-danger alert-dismissable">
 			<span class="close" data-dismiss="alert">x</span>
 			<?php echo $this->session->flashdata('error_message'); ?>
 		</div>
 	<?php endif ?>

	<?php if (isset($error_message)): ?>
		<br>
		<div class="alert alert-danger alert-dismissable">
			<span class="close" data-dismiss="alert">x</span>
			<?php echo $error_message; ?>
		</div>
	<?php endif ?>

	<?php if (validation_errors() != NULL): ?>
		<br>
		<div class="alert alert-danger alert-dismissable">
			<span class="close" data-dismiss="alert">x</span>
			<?php echo validation_errors(); ?>
		</div>
	<?php endif ?>
	<br><br>
	<center>
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="well well-lg" style="vertical-align: middle">
				<h1 style="padding-bottom: 20px;">LOGIN</h1>
				<form action="<?php echo base_url() ?>login" class="form-horizontal" method="POST">
					<div class="form-group">
						<label for="npm">NPM</label>
						<input type="text" class="form-control" id="npm" placeholder="NPM" name="npm">
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
					<input type="submit" value="Submit" class="btn btn-warning">
				</form>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</center>