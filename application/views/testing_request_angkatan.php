	<div>
		<h1>REQUEST PERKENALAN</h1>
		<hr>
	</div>

	<div class="container">
		<div class="col-sm-6">
			<form method="POST" class="form-horizontal" action="<?php echo site_url(); ?>/Perkenalan/request_peserta/4">
				<div class="form-group">
					<label for="nama" class="col-sm-3 control-label">Nama</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
					</div>
				</div>
				<div class="form-group">
					<label for="ciri_khas" class="col-sm-3 control-label">tempat lahir</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="ciri_khas" placeholder="Ciri khas" name="tempat_lahir">
					</div>
				</div>
				<div class="form-group">
					<label for="foto" class="col-sm-3 control-label">tgl lahir</label>
					<div class="col-sm-6">
						<input type="date" class="form-control" id="foto" placeholder="Masukkan link" name="tgl_lahir">
					</div>
				</div>
				<div class="form-group">
					<label for="ciri_khas" class="col-sm-3 control-label">alamat kos</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="ciri_khas" placeholder="Ciri khas" name="alamat_kos">
					</div>
				</div>
				<div class="form-group">
					<label for="ciri_khas" class="col-sm-3 control-label">id_line</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="ciri_khas" placeholder="Ciri khas" name="id_line">
					</div>
				</div>
				<div class="form-group">
					<label for="ciri_khas" class="col-sm-3 control-label">no hp</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="ciri_khas" placeholder="Ciri khas" name="no_hp">
					</div>
				</div>
				<div class="form-group">
					<label for="ciri_khas" class="col-sm-3 control-label">lick foto</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="ciri_khas" placeholder="Ciri khas" name="link_foto">
					</div>
				</div>
				<input class="col-sm-offset-1 btn btn-warning" type="submit" value="Submit" >
			</form>
		</div>
	</div>