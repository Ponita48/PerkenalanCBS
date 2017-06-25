	<br><br>
	<center>
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="well well-lg" style="vertical-align: middle">
				<h1 style="padding-bottom: 20px;">LOGIN</h1>
				<form action="<?php echo site_url() ?>UserController/login" class="form-horizontal" method="POST">
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