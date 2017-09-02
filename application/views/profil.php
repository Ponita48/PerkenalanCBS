
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

		<?php if (isset($message_display)): ?>	
			<div class="alert alert-success alert-dismissable">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
				<?php echo $message_display; ?>
			</div>
		<?php endif ?>

		<?php if (isset($error_message)): ?>
			<div class="alert alert-danger alert-dismissable">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
				<?php echo $error_message; ?>
			</div>
		<?php endif ?>
	<div class="header-title">
		<h1 id="nama-header">
		<?php if ($this->session->userdata['logged_in']['role'] != "admin"): ?> <!-- npm di session = npm yang dilihat -->
			<?php if ($this->session->userdata['logged_in']['npm'] == $result->npm): ?>
				MY 
			<?php endif ?>
		<?php endif ?>
		PROFILE</h1>
	</div>
	<div class="wrapper-for-all cf">
		<div class="single-mid-box cf">
			<div class="col-sm-4">
				<center>
					<?php if ($result->link_foto == NULL): ?>
						<img src="https://upload.wikimedia.org/wikipedia/en/b/b1/Portrait_placeholder.png" alt="" class="img-thumbnail"><br>
					<?php else: ?>
						<img src="<?php echo $result->link_foto;?>" alt="" class="img-thumbnail"><br>
					<?php endif ?>
				</center>
				<!-- Kalau udah login -->
				<?php if (isset($this->session->userdata['logged_in'])): ?>
					<!-- Login = peserta & dilihat != Peserta -->
					<?php if ($this->session->userdata['logged_in']['role'] != "admin"): ?> <!-- npm di session = npm yang dilihat -->
						<?php if ($this->session->userdata['logged_in']['npm'] == $result->npm): ?>
							<!-- PROFIL PRIBADI MABA -->
							<button class="btn btn-primary" id="chg_photo">Change Photo</button>
							<a href="<?php echo base_url(); ?>edit_profile">
								<button class="btn btn-success" id="edit" type="submit">Edit Profile</button>
							</a>
							<!-- <a href="<?php echo base_url(); ?>my_request">
								<button class="btn btn-warning" id="progress" type="submit"><i class="material-icons">trending_up</i></button>
							</a> -->
						<?php else : ?>
							<a href="<?php echo base_url(); ?>request/<?php echo $result->id_user; ?>"><button class="btn btn-warning" type="submit">Send Request</button></a>
						<?php endif ?>
					<?php endif ?>
					<!-- admin ngeliat -->
					<?php if ($this->session->userdata['logged_in']['role'] == "admin"): ?>
						<!-- cek apakah yang dilihat peserta atau kating -->
						<?php if ($result->role == "2017"): ?>
							<!-- ADMIN MELIHAT MABA -->
							<a href="<?php echo base_url().'perkenalan_angkatan/'.$result->id_user; ?>"><button class="btn btn-warning" type="submit">Check Submission</button></a><br><br>
						<?php endif ?>
					<?php endif ?>
				<?php endif ?>
				<!-- INI APA AING GANGERTI -->
				<div class="modal fade" id="modalFoto" role="dialog">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
						<form action="<?php echo base_url(); ?>profile/<?php echo $this->session->userdata['logged_in']['id_user']; ?>/change_pp" method="POST" enctype="multipart/form-data">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button> 
								<h4 class="modal-title">Change Photo</h4>
							</div>
							<div class="modal-body">
								<input type="file" name="pp" placeholder="Choose your new photo">
								<p></p>
								<p>Are you sure to change your profile photo?</p>
							</div>
							<div class="modal-footer">			
								<br>
								<input type="submit" class="btn btn-success">
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
			<div class="identity-box">
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
					<tr>
						<td></td>
						<td></td>
					</tr>
				</table>
				<div class="action-box cf">
					<?php if ($this->session->userdata['logged_in']['role'] != "admin"): ?> <!-- npm di session = npm yang dilihat -->
						<?php if ($this->session->userdata['logged_in']['npm'] == $result->npm): ?>
							<a href="<?php echo base_url(); ?>my_request">
								<button class="btn btn-warning" id="progress" type="submit">My Requests</button>
							</a> 
						<?php endif ?>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {
			$('#chg_photo').click(function() {
				$('#modalFoto').modal('show');
			});
		});
	</script>