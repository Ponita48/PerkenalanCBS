	<div>
		<h1>REQUEST PERKENALAN</h1>
		<hr>
	</div>

	<div class="container">
		<div class="col-sm-6">
			<form method="POST" class="form-horizontal" action="<?php echo site_url(); ?>Perkenalan/request_peserta/4">
				<div class="form-group">
					<label for="nama" class="col-sm-3 control-label">Nama</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
					</div>
				</div>
				<div class="form-group">
					<label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" name="tempat_lahir">
					</div>
				</div>
				<div class="form-group">
					<label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir" name="tgl_lahir" readonly="true">
					</div>
				</div>
				<div class="form-group">
					<label for="alamat_kos" class="col-sm-3 control-label">Alamat Kos</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="alamat_kos" placeholder="Alamat Kos" name="alamat_kos">
					</div>
				</div>
				<div class="form-group">
					<label for="id_line" class="col-sm-3 control-label">ID LINE</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="id_line" placeholder="ID LINE" name="id_line">
					</div>
				</div>
				<div class="form-group">
					<label for="no_hp" class="col-sm-3 control-label">Nomor HP</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="no_hp" placeholder="Nomor HP" name="no_hp">
					</div>
				</div>
				<div class="form-group">
					<label for="link_foto" class="col-sm-3 control-label">Link Foto</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="link_foto" placeholder="Link Foto" name="link_foto">
					</div>
				</div>
				<input class="col-sm-offset-1 btn btn-warning" type="submit" value="Submit" >
			</form>
		</div>
	</div>