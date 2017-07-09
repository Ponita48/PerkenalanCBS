	<div>
		<h1>ANGGOTA KELUARGA HIMATIF</h1>
		<br>
	</div>

	<div class="container">

  		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#2013" aria-controls="2013" role="tab" data-toggle="tab">2013</a></li>
			<li role="presentation"><a href="#2014" aria-controls="2014" role="tab" data-toggle="tab">2014</a></li>
			<li role="presentation"><a href="#2015" aria-controls="2015" role="tab" data-toggle="tab">2015</a></li>
			<li role="presentation"><a href="#2016" aria-controls="2016" role="tab" data-toggle="tab">2016</a></li>
		</ul><br>
		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane container-fluid active" id="2013">
				<center>
				<?php foreach ($result as $key): ?>
					<?php if ($key->role == "2013"): ?>
						<a href="<?php echo base_url().'profile/'.$key->id_user; ?>">
							<div class="col-md-3">
								<img src="" alt="" class="img-responsive">
								<p id="nama">wahaha</p>
								<p id="npm"><?php echo $key->npm; ?></p>
							</div>
						</a>
					<?php endif ?>
				<?php endforeach ?>
				</center>
			</div>
			<div role="tabpanel" class="tab-pane container-fluid active" id="2014">
				<center>
				<?php foreach ($result as $key): ?>
					<?php if ($key->role == "2014"): ?>
						<a href="<?php echo base_url().'profile/'.$key->id_user; ?>">
							<div class="col-md-3">
								<img src="" alt="" class="img-responsive">
								<p id="nama">wahaha</p>
								<p id="npm"><?php echo $key->npm; ?></p>
							</div>
						</a>
					<?php endif ?>
				<?php endforeach ?>
				</center>
			</div>
			<div role="tabpanel" class="tab-pane container-fluid active" id="2015">
				<center>
				<?php foreach ($result as $key): ?>
					<?php if ($key->role == "2015"): ?>
						<a href="<?php echo base_url().'profile/'.$key->id_user; ?>">
							<div class="col-md-3">
								<img src="" alt="" class="img-responsive">
								<p id="nama">wahaha</p>
								<p id="npm"><?php echo $key->npm; ?></p>
							</div>
						</a>
					<?php endif ?>
				<?php endforeach ?>
				</center>
			</div>
			<div role="tabpanel" class="tab-pane container-fluid active" id="2016">
				<center>
				<?php foreach ($result as $key): ?>
					<?php if ($key->role == "2016"): ?>
						<a href="<?php echo base_url().'profile/'.$key->id_user; ?>">
							<div class="col-md-3">
								<img src="" alt="" class="img-responsive">
								<p id="nama">wahaha</p>
								<p id="npm"><?php echo $key->npm; ?></p>
							</div>
						</a>
					<?php endif ?>
				<?php endforeach ?>
				</center>
			</div>
			
		</div>

	</div>