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

<div>
	<h1>REQUEST PERKENALAN</h1>
	<hr>
</div>

<div class="container">
	<div class="col-sm-6">
		<form method="POST" class="form-horizontal" action="<?php echo base_url(); ?>request_keluarga/<?php echo $id_user; ?>">
			<div class="form-group">
				<label for="nama" class="col-sm-3 control-label">Nama</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
				</div>
			</div>
			<div class="form-group">
				<label for="ciri_khas" class="col-sm-3 control-label">Ciri Khas</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="ciri_khas" placeholder="Ciri khas" name="ciri_khas">
				</div>
			</div>
			<div class="form-group">
				<label for="foto" class="col-sm-3 control-label">Foto Selfie</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="foto" placeholder="Masukkan link" name="link_foto">
				</div>
			</div>
			<input class="col-sm-offset-1 btn btn-warning" type="submit" value="Submit" >
		</form>
	</div>
</div>

	<style type="text/css">
		body {
			background-color: #393639;
			color: #FFD51E;
		}

	</style>

