<h1>REQUEST PERKENALAN ANGKATAN</h1>
<hr>
<div class="col-md-3">
	<center>
		<img src="https://static.superdeluxe.com/dankland/generators/y-tho.jpg" alt="" class="img-thumbnail" id="poto"><br><br>
		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalFoto">Change Photo</button>
		
		<div class="modal fade" id="modalFoto" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<span class="close" data-dissmiss="modal">&times;</span>
						<h4 class="modal-title">Change Photo</h4>
					</div>
					<div class="modal-body">
						<?php for ($i=2; $i <= 4; $i++) { ?>
						<div class="col-sm-4">
							<img src="<?php echo base_url().'Photos/PP/'.$i.'.jpg'; ?>" alt="NPM <?php echo $i+1; ?> belum mengisi foto" class="img img-responsive" onclick="change_photo(this.src);">
							<?php if ($i <= 10): ?>
								14081015000<?php echo $i; ?>
							<?php else: ?>
								1408101500<?php echo $i; ?>
							<?php endif ?>
						</div>
						<?php } ?>
					</div>
						<br>			
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</center>
</div>
<div class="col-md-9">
	<div class="well well-lg" style="vertical-align: middle">
		<form action="<?php echo base_url(); ?>request_peserta/<?php echo $id_user; ?>" method="POST">
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="nama" class="form-control" name="nama" placeholder="Nama teman anda">
			</div>
			<div class="form-group">
				<label for="tempat_lahir">Tempat Lahir</label>
				<input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat lahir teman anda">
			</div>
			<div class="form-group">
				<label for="tgl_lahir">Tanggal Lahir</label>
				<input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir">
			</div>
			<div class="form-group">
				<label for="alamat_kos">Alamat</label>
				<input type="text" class="form-control" name="alamat_kos" placeholder="Alamat teman anda">
			</div>
			<div class="form-group">
				<label for="id_line">ID LINE</label>
				<input type="text" class="form-control" name="id_line" placeholder="ID LINE teman anda">
			</div>
			<div class="form-group">
				<label for="no_hp">No. HP</label>
				<input type="text" class="form-control" name="no_hp" placeholder="Nomor HP teman anda">
			</div>
			<div class="form-group">
				<input type="hidden" class="form-control" name="link_foto" placeholder="link foto teman anda" id="link-foto">
			</div>
			<input type="submit" value="Submit" class="btn btn-warning">
		</form>
	</div>
</div>

<script>
	function change_photo(el) {
		document.getElementById('poto').src = el;
		document.getElementById('link-foto').value = el;
	}
</script>