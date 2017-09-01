<?php if ($this->session->flashdata('error_message')): ?>
	<br>
	<div class="alert alert-danger alert-dismissable">
		<span class="close" data-dismiss="alert">x</span>
		<?php echo $this->session->flashdata('error_message'); ?>
	</div>
<?php endif ?>


<?php if ($this->session->flashdata('message_display')): ?>
	<br>
	<div class="alert alert-success alert-dismissable">
		<span class="close" data-dismiss="alert">x</span>
		<?php echo $this->session->flashdata('message_display'); ?>
	</div>
<?php endif ?>
	
<?php if (validation_errors() != NULL): ?>
	<br>
	<div class="alert alert-danger alert-dismissable">
		<span class="close" data-dismiss="alert">x</span>
		<?php echo validation_errors(); ?>
	</div>
<?php endif; ?>

<div class="header-title">
	<h1 id="nama-header">SEND REQUEST</h1>
</div>

<div class="wrapper-for-all cf">
	<!-- <div class="single-mid-box cf"> -->
	<!-- <img src="<?php echo $result->link_foto;?>" alt="" class="img-thumbnail"> -->
		<form method="POST" class="single-mid-box small" action="<?php echo base_url(); ?>request_keluarga/<?php echo $id_user; ?>">
			<div class="form-group cf">
				<label for="nama" class="control-label">Nama</label>
				<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
				
			</div>
			<div class="form-group cf">
				<label for="ciri_khas" class="control-label">Ciri Khas</label>
				<input type="text" class="form-control" id="ciri_khas" placeholder="Ciri khas" name="ciri_khas">
			</div>
			<div class="form-group cf">
				<label for="foto" class="control-label">Foto Selfie</label>
				<input type="text" class="form-control" id="foto" placeholder="Masukkan link" name="link_foto">
			</div>
			<input class="btn btn-warning" type="submit" value="Submit" >
		</form>
	<!-- </div> -->
</div>