
<!-- TODO: pake id untuk tiap mahasiswa -->
	<div>
		<h1>TERIMA PERKENALAN?</h1>
		<hr>
	</div>

	<div class="container">
		<div class="col-sm-4">
			<center>
				<img src="<?php echo $result->link_foto_peserta; ?>" alt="" class="img-responsive"><br>
				<p>Foto Mahasiswa Baru</p>
			</center>
		</div>
		<div class="col-sm-4">
			<table class="table table-borderless">
				<tr>
					<td><b>Nama</b></td>
					<td><?php echo $result->nama; ?></td>
				</tr>
				<tr>
					<td><b>NPM</b></td>
					<td><?php echo $result->npm_keluarga; ?></td>
				</tr>
				<tr>
					<td><b>Ciri Khas</b></td>
					<td><?php echo $result->ciri_khas; ?></td>
				</tr>
			</table>
		</div>
		<div class="col-sm-4">
			<center>
				<img src="<?php echo $result->link_foto; ?>" alt="" class="img-responsive"><br>
				<p>Foto Selfie</p>
			</center>
		</div>
		<div class="col-sm-4">
				<a href="#"><button class="btn btn-warning btn-block" type="submit">Lihat Profil</button></a><br><br>	
				<a href="<?php echo base_url(); ?>approve_perkenalan/<?php echo $result->id_perkenalan_kating; ?>"><button class="btn btn-success btn-block" type="submit">Terima Perkenalan</button></a><br><br>
				<a href="<?php echo base_url(); ?>reject_perkenalan/<?php echo $result->id_perkenalan_kating; ?>"><button class="btn btn-danger btn-block" type="submit">Tolak Perkenalan</button></a><br><br>
		</div>
	</div>