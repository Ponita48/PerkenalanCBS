	<h1>CHANGE PROFILE</h1>
	<hr>
		<?php if (isset($message_display)): ?>	
			<div class="alert alert-success alert-dismissable">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
				<?php echo $message_display; ?>
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

	<div class="container">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="well well-lg">
				<form class="form-horizontal" action="<?php echo base_url(); ?>edit_profile" method="POST">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="<?php echo $result->nama; ?>">
					</div>
					<div class="form-group">
						<label for="npm">NPM</label>
						<input type="text" class="form-control" id="npm" readonly="TRUE" placeholder="NPM" value="<?php echo $result->npm; ?>">
					</div>
					<div class="form-group">
						<label for="jk">Jenis Kelamin</label>
						<select name="jk" id="jk" class="form-control">
							<?php switch ($result->jk) { 
								case 'Laki-laki': ?>
									<option value="Laki-laki" selected>Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
									<option value="Lainnya">Lainnya</option>		
									<?php break; ?>
								<?php case 'Perempuan': ?>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan" selected>Perempuan</option>
									<option value="Lainnya">Lainnya</option>	
									<?php break; ?>
								<?php default: ?>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
									<option value="Lainnya" selected>Lainnya</option>
									<?php break; ?>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="tempat_lahir">Tempat Lahir</label>
						<input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $result->tempat_lahir; ?>">
					</div>
					<div class="form-group">
						<label for="tgl_lahir">Tanggal Lahir</label>
						<input type="text" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" id="tgl_lahir" value="<?php echo $result->tgl_lahir; ?>">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat Kos</label>
						<input type="text" name="alamat_kos" class="form-control" id="alamat" placeholder="Alamat Kos" value="<?php echo $result->alamat_kos; ?>">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo $result->email; ?>">
					</div>
					<div class="form-group">
						<label for="hp">Nomor HP</label>
						<input type="text" name="no_hp" class="form-control" id="hp" placeholder="Nomor HP" value="<?php echo $result->no_hp; ?>">
					</div>
					<div class="form-group">
						<label for="line">ID LINE</label>
						<input type="text" name="id_line" class="form-control" id="line" placeholder="ID LINE" value="<?php echo $result->id_line; ?>">
					</div>
					<div class="form-group">
						<label for="motto_hidup">Motto Hidup</label>
						<input type="text" name="motto_hidup" class="form-control" id="motto_hidup" placeholder="Motto Hidup" value="<?php echo $result->motto_hidup; ?>">
					</div>
					<center>
						<input type="submit" class="btn btn-warning">
					</center>
				</form>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>

	<style type="text/css">
		body {
			background-color: #393639;
			color: #FFD51E;
		}

		.well {
			background-color: gray;
		}
	</style>