	<div class="header-title">
		<h1 id="nama-header">MY REQUESTS</h1> <!--BUAT MABA-->
	</div>
	<div class="wrapper-for-all">
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">Pending</a></li>
			<li role="presentation"><a href="#2" aria-controls="2" role="tab" data-toggle="tab">Accepted</a></li>
		</ul><br>
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane container-fluid active" id="1">
				<center>
				<?php if($pending != NULL) : ?>
					<?php foreach ($pending as $value) : ?>
						<div class="person-box">
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
					<?php if($accepted != NULL) : ?>
						<?php foreach ($accepted as $value) : ?>
							<div class="person-box">
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