	<div class="header-title">
		<h1 id="nama-header">MY REQUESTS</h1> <!--BUAT MABA-->
	</div>
	<div class="wrapper-for-all" id="my-request">
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-ok"></i>&nbsp; Accepted</a></li>
			<li role="presentation"><a href="#2" aria-controls="2" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-remove"></i>&nbsp; Declined</a></li>
			<li role="presentation"><a href="#3" aria-controls="3" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-time"></i>&nbsp; Pending</a></li>
		</ul><br>
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane container-fluid active" id="1">
				<center>
				<?php if($accepted != NULL) : ?>
					<?php foreach ($accepted as $value) : ?>
						<div class="person-box" id="my_request">
							<?php if (is_null($value->link_foto)): ?>
								<img src="<?php echo base_url(); ?>Photos/placeholder.png" alt="">
							<?php else: ?>
								<img src="<?php echo $value->link_foto; ?>" alt="" class="img-responsive">
							<?php endif ?>
							<div class="identity">
								<p id="nama"><?php echo $value->nama; ?></p>
								<p id="npm"><?php echo $value->npm_keluarga; ?></p>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
				</center>
			</div>
			<div role="tabpanel" class="tab-pane container-fluid" id="2">
				<center>
				<?php if($declined != NULL) : ?>
					<?php foreach ($declined as $value) : ?>
						<div class="person-box" id="my_request">
							<?php if (is_null($value->link_foto)): ?>
								<img src="<?php echo base_url(); ?>Photos/placeholder.png" alt="">
							<?php else: ?>
								<img src="<?php echo $value->link_foto; ?>" alt="" class="img-responsive">
							<?php endif ?>
							<div class="identity">
								<p id="nama"><?php echo $value->nama; ?></p>
								<p id="npm"><?php echo $value->npm_keluarga; ?></p>
							</div>
            				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reason-<?php echo $value->id_perkenalan_kating; ?>">&nbsp; <span>Alasan</span></button>
							<div class="modal fade" id="reason-<?php echo $value->id_perkenalan_kating; ?>" role="dialog"> <!-- POPUP ALASAN DECLINE -->
								<div class="modal-dialog modal-lg">
									<div class="modal-content" style="left: 0;">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white;">&times;</button> 
											<h4 class="modal-title">My Request</h4>
										</div>
										<div class="modal-body">
											<label for="message">Alasan: </label>
											<textarea name="message" id="message" rows="5" class="form-control" disabled>
											<?php if (is_null($value->message)): ?>
												Silahkan Coba Lagi
											<?php else: ?>
												<?php echo $value->message; ?>
											<?php endif ?>
											</textarea>
										</div>
										<div class="modal-footer">
											<!-- <input class="btn btn-success" type="submit" name="Kirim"> -->
											<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
										</div>
									</div>
								</div> 
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
				</center>
			</div>
			<div role="tabpanel" class="tab-pane container-fluid" id="3">
				<center>
					<?php if($pending != NULL) : ?>
						<?php foreach ($pending as $value) : ?>
							<div class="person-box" id="my_request">
							<?php if (is_null($value->link_foto)): ?>
								<img src="<?php echo base_url(); ?>Photos/placeholder.png" alt="">
							<?php else: ?>
								<img src="<?php echo $value->link_foto; ?>" alt="" class="img-responsive">
							<?php endif ?>
							<div class="identity">
								<p id="nama"><?php echo $value->nama; ?></p>
								<p id="npm"><?php echo $value->npm_keluarga; ?></p>
							</div>
						</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</center>
			</div>
		</div>
		
	</div>