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
			<div role="tabpanel" class="tab-pane container-fluid active" id="2">
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