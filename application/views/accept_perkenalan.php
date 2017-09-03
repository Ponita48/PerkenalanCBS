<div class="header-title">
	<h1 id="nama-header">REQUEST VERIFICATION</h1>
</div>

<div class="wrapper-for-all cf">
	<div class="col-sm-4">
		<center>
			<img src="<?php echo $result->link_foto_peserta; ?>" class="myImg img-thumbnail"><br>
			<p>Profile Photo</p>
		</center>
	</div>
	<div class="col-sm-4">
		<div class="profile-box">
			<table class="table table-borderless">
				<tr>
					<td><b>Nama Keluarga</b></td>
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
		<div class="verification-action-box">
			<a href="<?php echo base_url().'reject_perkenalan/'.$result->id_perkenalan_kating; ?>" class="btn btn-danger btn-block" type="submit">
				<span>Decline</span>
			</a>
			<a href="<?php echo base_url().'profile/'.$result->id_user_maba; ?>" class="btn btn-warning" type="submit">
				<span>See Profile</span>
			</a>
			<a href="<?php echo base_url().'approve_perkenalan/'.$result->id_perkenalan_kating; ?>" class="btn btn-success btn-block" type="submit">
				<span>Approve this Request</span>
			</a>
		</div>
	</div>
	<div class="col-sm-4">
		<center>
			<img src="<?php echo $result->link_foto; ?>" class="myImg img-thumbnail"><br>
			<p>Required Photo (selfie)</p>
		</center>
	</div>
	<!-- <div class="col-sm-4"></div> -->
</div>