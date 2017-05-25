	<div>
		<h1>REQUEST PERKENALAN</h1>
		<hr>
	</div>

	<div class="container">
		<div class="col-sm-6">
			<form method="POST" class="form-horizontal">
				<div class="form-group">
					<label for="nama" class="col-sm-3 control-label">Nama</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="nama" placeholder="Nama">
					</div>
				</div>
				<div class="form-group">
					<label for="ciri_khas" class="col-sm-3 control-label">Ciri Khas</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="ciri_khas" placeholder="Ciri khas">
					</div>
				</div>
				<div class="form-group">
					<label for="foto" class="col-sm-3 control-label">Foto Selfie</label>
					<div class="col-sm-6">
						<span class="btn btn-default btn-file"><span>Pilih foto</span><input type="file" class="form-control" id="foto" style="border: none; box-shadow: none"></span>
					</div>
				</div>
				<input class="col-sm-offset-1 btn btn-warning" type="submit" value="Submit" >
			</form>
		</div>
	</div>