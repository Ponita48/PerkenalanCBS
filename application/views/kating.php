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
		<h1>KELUARGA HIMATIF FMIPA UNPAD</h1>
	</div>

	<div class="container">
  		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#2012" aria-controls="2012" role="tab" data-toggle="tab">Circle - 2012</a></li>
			<li role="presentation"><a href="#2013" aria-controls="2013" role="tab" data-toggle="tab">Pascal - 2013</a></li>
			<li role="presentation"><a href="#2014" aria-controls="2014" role="tab" data-toggle="tab">Assembly - 2014</a></li>
			<li role="presentation"><a href="#2015" aria-controls="2015" role="tab" data-toggle="tab">Binary - 2015</a></li>
			<li role="presentation"><a href="#2016" aria-controls="2016" role="tab" data-toggle="tab">Cyber - 2016</a></li>
		</ul><br>
		<!-- Tab panes -->
	<?php if (isset($result)) : ?>
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane container-fluid active" id="2012">
				<center>
				<?php foreach ($result as $key): ?>
					<?php if ($key->role == "2012"): ?>
						<a class="person-box" href="<?php echo base_url().'profile/'.$key->id_user; ?>">
							<div class="photo-box">
								<img src="<?php echo $key->link_foto; ?>" alt="" class="img-responsive img-thumbnail">
							</div>
							<div class="identity">
								<p id="nama"><?php echo $key->nama; ?></p>
								<p id="npm"><?php echo $key->npm; ?></p>
							</div>
						</a>
					<?php endif ?>
				<?php endforeach ?>
				</center>
			</div>
			<div role="tabpanel" class="tab-pane container-fluid" id="2013">
				<center>
				<?php foreach ($result as $key): ?>
					<?php if ($key->role == "2013"): ?>
						<a class="person-box" href="<?php echo base_url().'profile/'.$key->id_user; ?>">
							<img src="<?php echo $key->link_foto; ?>" alt="" class="img-responsive img-thumbnail">
							<div class="identity">
								<p id="nama"><?php echo $key->nama; ?></p>
								<p id="npm"><?php echo $key->npm; ?></p>
							</div>
						</a>
					<?php endif ?>
				<?php endforeach ?>
				</center>
			</div>
			<div role="tabpanel" class="tab-pane container-fluid" id="2014">
				<center>
				<?php foreach ($result as $key): ?>
					<?php if ($key->role == "2014"): ?>
						<a class="person-box" href="<?php echo base_url().'profile/'.$key->id_user; ?>">
							<img src="<?php echo $key->link_foto; ?>" alt="" class="img-responsive img-thumbnail">
							<div class="identity">
								<p id="nama"><?php echo $key->nama; ?></p>
								<p id="npm"><?php echo $key->npm; ?></p>
							</div>
						</a>
					<?php endif ?>
				<?php endforeach ?>
				</center>
			</div>
			<div role="tabpanel" class="tab-pane container-fluid" id="2015">
				<center>
				<?php foreach ($result as $key): ?>
					<?php if ($key->role == "2015"): ?>
						<a class="person-box" href="<?php echo base_url().'profile/'.$key->id_user; ?>">
							<img src="<?php echo $key->link_foto; ?>" alt="" class="img-responsive img-thumbnail">
							<div class="identity">
								<p id="nama"><?php echo $key->nama; ?></p>
								<p id="npm"><?php echo $key->npm; ?></p>
							</div>
						</a>
					<?php endif ?>
				<?php endforeach ?>
				</center>
			</div>
			<div role="tabpanel" class="tab-pane container-fluid" id="2016">
				<center>
				<?php foreach ($result as $key): ?>
					<?php if ($key->role == "2016"): ?>
						<a class="person-box" href="<?php echo base_url().'profile/'.$key->id_user; ?>">
							<img src="<?php echo $key->link_foto; ?>" alt="" class="img-responsive img-thumbnail">
							<div class="identity">
								<p id="nama"><?php echo $key->nama; ?></p>
								<p id="npm"><?php echo $key->npm; ?></p>
							</div>
						</a>
					<?php endif ?>
				<?php endforeach ?>
				</center>
			</div>
			
		</div>
	<?php endif; ?>
	
	</div>