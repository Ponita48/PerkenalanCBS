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

	<?php if (validation_errors() != NULL): ?>
		<div class="alert alert-danger alert-dismissable">
			<span class="close" data-dismiss="alert">x</span>
			<?php echo validation_errors(); ?>
		</div>
	<?php endif ?>

<div class="header-title">
	<h1 id="nama-header">REQUEST TO DELPHI 2017</h1>
</div>
<div class="wrapper-for-all cf">
	<div class="person-box" id="req-teman">
		<img src="<?php echo base_url(); ?>Photos/placeholder.png" alt="" class="img-thumbnail" id="poto">
		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalFoto">Change Photo</button>
	</div>
	<div class="form-box"> <!-- Form isi biodata -->
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
					<!-- <label for="link_foto" type="hidden">Link Foto</label> -->
					<input type="hidden" class="form-control" name="link_foto" placeholder="link foto teman anda" id="link-foto" id="linkPoto">
				</div>
				<input type="submit" value="Submit" class="btn btn-warning" >
			</form>
		</div>
	</div>
	<div class="modal fade" id="modalFoto" role="dialog"> <!-- gangerti .js, fadenya ngga ketahan langsung ilang lagi -->
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button> 
					<h4 class="modal-title">Change Photo</h4>
				</div>
				<div class="modal-body">
					<div class="container">
						<?php foreach ($pp as $data) : ?>
						<div class="col-sm-4">
							<img src="<?php echo $data->link_foto; ?>" alt="No Photo!" class="img-responsive img-thumbnail" onclick="change_photo(this.src);">
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="modal-footer"></div>
			</div>
		</div>
	</div>
</div>
<script>
	function change_photo(el) {
		document.getElementById('poto').src = el;
		document.getElementById('link-foto').value = el;
		document.getElementById('linkPoto').value = el;
	}
</script>