	<div>
		<h1>REQUEST LIST</h1> <!--BUAT MABA-->
		<hr>
	</div>
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">Pending</a></li>
		<li role="presentation"><a href="#2" aria-controls="2" role="tab" data-toggle="tab">Accepted</a></li>
	</ul><br>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane container-fluid active" id="1">
			<center>
			<?php if($pending != NULL) : ?>
				<?php foreach ($pending as $value) : ?>
					<a href="#">
						<div class="col-md-3">
							<img src="<?php echo $value->link_foto; ?>" alt="" class="img-responsive">
								<p id="nama"><?php echo $value->nama; ?></p>
								<p id="npm"><?php echo $value->npm_keluarga; ?></p>
						</div>
					</a>
				<?php endforeach; ?>
			<?php endif; ?>
			</center>
		</div>
		<div role="tabpanel" class="tab-pane container-fluid" id="2">
			<center>
				<?php if($accepted != NULL) : ?>
					<?php foreach ($accepted as $value) : ?>
						<a href="#">
							<div class="col-md-3">
								<img src="<?php echo $value->link_foto; ?>" alt="" class="img-responsive">
									<p id="nama"><?php echo $value->nama; ?></p>
									<p id="npm"><?php echo $value->npm_keluarga; ?></p>
							</div>
						</a>
					<?php endforeach; ?>
				<?php endif; ?>
			</center>
		</div>
	</div>

	<style type="text/css">
		body {
			background-color: #393639;
			color: #FFD51E;
		}

	</style>