<div class="header-title">
	<h1 id="nama-header">REQUEST VERIFICATION</h1>
</div>

<div class="wrapper-for-all cf">
	<div class="col-sm-4">
		<div class="myImg">
			<img src="<?php echo $result->pp_keluarga; ?>" class="img-thumbnail">
			<p>Foto Keluarga</p>
		</div>
		<div class="myImg">
			<img src="<?php echo $result->link_foto_peserta; ?>" class="img-thumbnail">
			<p>Foto Profil Peserta</p>
		</div>
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
	</div>
	<div class="col-sm-4">
		<div class="myImg">
			<img src="<?php echo $result->link_foto; ?>" class="img-thumbnail"><br>
			<p>Foto Perkenalan</p>
		</div>
	</div>
	<div class="single-box cf">
		<div class="verification-action-box">
<!-- 		<a href="<?php echo base_url().'reject_perkenalan/'.$result->id_perkenalan_kating; ?>" class="btn btn-danger btn-block" type="submit">
				<span>Decline</span>
			</a> -->
            <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#modalReason">&nbsp; <span>Decline</span></button>
			<a href="<?php echo base_url().'profile/'.$result->id_user_maba; ?>" class="btn btn-warning" type="submit">
				<span>Profile</span>
			</a>
			<a href="<?php echo base_url().'approve_perkenalan/'.$result->id_perkenalan_kating; ?>" class="btn btn-success btn-block" id="approve-request"type="submit">
				<span>Approve</span>
			</a>
		</div>
	</div>
	<div class="modal fade" id="modalReason" role="dialog"> <!-- POPUP DECLINE -->
		<form action="<?php echo base_url().'reject_perkenalan/'.$result->id_perkenalan_kating; ?>" method="POST">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button> 
					<h4 class="modal-title">Decline this Submission?</h4>
				</div>
				<div class="modal-body">
						<div class="form-group">
							<label for="message">Reason: </label>
							<textarea name="message" id="message" rows="5" class="form-control"></textarea>
						</div>
				</div>
				<div class="modal-footer">
					<input class="btn btn-success" type="submit" name="Kirim">
					<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
				</div>
			</div>
		</div> 
		</form>
	</div>
</div>