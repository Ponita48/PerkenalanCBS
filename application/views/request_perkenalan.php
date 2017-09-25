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
<?php endif; ?>

<div class="header-title">
	<h1 id="nama-header">INTRODUCTION REQUEST</h1>
</div>

<div class="single-mid-box cf">
	<center><div class="photo-box cf" id="photoSelfie">
		<img src="<?php echo base_url(); ?>Photos/placeholder.png" alt="" class="img img-thumbnail img-responsive" id="load-photo">
	</div></center>
	<form method="POST" class="identity-box" action="<?php echo base_url(); ?>request_keluarga/<?php echo $id_user; ?>" id="requestPerkenalan">
		<div class="form-group">
			<label for="nama" class="control-label">Nama</label>
			<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
		</div>
		<div class="form-group">
			<label for="ciri_khas" class="control-label">Kesan / Ciri Khas</label>
			<input type="text" class="form-control" id="ciri_khas" placeholder="Kesan / Ciri khas" name="ciri_khas">
		</div>
		<div class="form-group">
			<label for="foto" class="control-label">Photo Requirement</label>
			<input type="url" class="form-control" id="foto" placeholder="Jika foto tidak muncul di samping, maka format Anda salah." name="link_foto">
		</div>
		<input class="btn btn-success" type="submit" value="Send Request" id="send-request">
	</form>
</div>