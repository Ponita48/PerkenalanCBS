	<div>
		<h1>PROFIL</h1>
		<hr>
		
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
	</div>
	<div class="container">
		<div class="col-sm-3">
			<center>
				<?php if ($result->link_foto == NULL): ?>
					<img src="https://upload.wikimedia.org/wikipedia/en/b/b1/Portrait_placeholder.png" alt="" class="img-responsive img-thumbnail"><br>
				<?php else: ?>
					<img src="<?php echo $result->link_foto;?>" alt="" class="img-responsive img-thumbnail"><br>
				<?php endif ?>
				<!-- Kalau udah login -->
				<?php if (isset($this->session->userdata['logged_in'])): ?>
					<!-- Login = peserta & dilihat != Peserta -->
					<?php if ($this->session->userdata['logged_in']['role'] != "admin"): ?>
						
						<!-- npm di session = npm yang dilihat -->
						<?php if ($this->session->userdata['logged_in']['npm'] == $result->npm): ?>
							<!-- PROFIL PRIBADI MABA -->
							<button class="btn btn-primary" id="chg_photo">Change Photo</button><br><br>
							<a href="<?php echo base_url(); ?>edit_profile"><button class="btn btn-success" type="submit">Edit Profil</button></a><br><br>
							<a href="<?php echo base_url(); ?>my_request"><button class="btn btn-warning" type="submit">Lihat Daftar Perkenalan</button></a><br><br>
						<?php else : ?>
							<a href="<?php echo base_url(); ?>request/<?php echo $result->id_user; ?>"><button class="btn btn-warning" type="submit">Request Perkenalan</button></a><br><br>
						<?php endif ?>
					<?php endif ?>
					<!-- admin ngeliat -->
					<?php if ($this->session->userdata['logged_in']['role'] == "admin"): ?>
						<!-- cek apakah yang dilihat peserta atau kating -->
						<?php if ($result->role == "2017"): ?>
							<!-- ADMIN MELIHAT MABA -->
							<a href="<?php echo base_url().'perkenalan_angkatan/'.$result->id_user; ?>"><button class="btn btn-warning" type="submit">Lihat Perkenalan Angkatan</button></a><br><br>
						<?php endif ?>
					<?php endif ?>
				<?php endif ?>
			</center>
			<div class="modal fade" id="modalFoto" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
					<form action="<?php echo base_url(); ?>profile/<?php echo $this->session->userdata['logged_in']['id_user']; ?>/change_pp" method="POST" enctype="multipart/form-data">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button> 
							<h4 class="modal-title">Change Photo</h4>
						</div>
						<div class="modal-body">
							<p>Apakah anda yakin ingin mengganti foto profil?</p>
							<input type="file" name="pp" placeholder="Chose your photo profile">
						</div>
						<div class="modal-footer">			
							<br>
							<input type="submit" class="btn btn-primary">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-9">
			<table class="table table-borderless">
				<tr>
					<td><b>Nama</b></td>
					<td><?php echo $result->nama; ?></td>
				</tr>
				<tr>
					<td><b>NPM</b></td>
					<td><?php echo $result->npm; ?></td>
				</tr>
				<tr>
					<td><b>Jenis Kelamin</b></td>
					<td><?php echo $result->jk; ?></td>
				</tr>
			</table>
		</div>
	</div>

	<script>
		$(document).ready(function() {
			$('#chg_photo').click(function() {
				$('#modalFoto').modal('show');
			});
		});
	</script>