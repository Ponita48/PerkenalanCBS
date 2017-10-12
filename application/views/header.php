<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Character Building Season 2017</title>
		<link rel="icon" href="http://localhost/PerkenalanCBS/img/logo-delphi.png"> <!-- icon warna putihnya ga keliatan -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/user.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tree-diagram.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material-icons.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/main.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/js/dragpack.js" defer></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<!-- <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script> -->
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
		<script>
			function hint(str) {
				if (str.length == 0) {
					document.getElementById("hasil").innerHTML = "";
					return;
				}else {
					str = str.replace(" ", "+");
				}

				$.ajax({
					type:'GET',
					url:'<?php echo base_url(); ?>ajax/'+str,
					success:function(data){
						$("#hasil").html(data);
					}
				});
			}
		</script>
	</head>
	<body>
		<div class="main-menu"> <!-- MAIN MENU -->
	        <div class="main-menu-container">
	            <div class="main-menu-header">
	            	<div class="close-menu-btn"></div>
	                <center><img class="main-menu-img" src="<?php echo base_url(); ?>/img/logo-delphi.png"></center>
		            <?php if (isset($this->session->userdata['logged_in'])): ?>
						<?php if ($this->session->userdata['logged_in']['role'] != "admin"): ?>
			                <div class="main-menu-title">CBS 2017</div>
			                <div class="main-menu-title" id="npm-menu"><?php echo $this->session->userdata('logged_in')['role']; ?> (Delphi <?php echo $this->session->userdata('logged_in')['npm']; ?>)</div>
			                <!-- <div class="main-menu-title" id="npm">(<?php echo $this->session->userdata('logged_in')['npm']; ?>)</div> -->
		                <?php else: ?>
		                	<div class="main-menu-title" id="admin">Administrator CBS 2017</div>
		                <?php endif ?>
					<?php endif ?>
	            </div>
	            <div class="main-menu-body">
	            	<li class="main-menu-list">
	            		<div class="icon-home"></div>
	                	<a href="<?php echo base_url();?>">Home</a>
	            	</li>
	                <li class="main-menu-list">
	            		<div class="icon-friend"></div>
	                	<a href="<?php echo base_url().'angkatan'; ?>">DELPHI 2017</a>
	            	</li>
	            	<li class="main-menu-list">
	            		<div class="icon-people"></div>
						<a href="<?php echo base_url().'perkenalan'; ?>">Keluarga HIMATIF</a>
					</li>
					<?php if (isset($this->session->userdata['logged_in'])): ?>
						<?php if ($this->session->userdata['logged_in']['role'] == "admin"): ?>
							<li class="main-menu-list">
								<div class="icon-perkenalan"></div>
								<a href="<?php echo base_url().'perkenalan_keluarga'; ?>">Requests Submission</a>
							</li>
							<li class="main-menu-list">
	            				<div class="icon-admin"></div>
								<a href="<?php echo base_url().'jumlah_perkenalan'; ?>">Task Progress</a>
							</li>
							<li class="main-menu-list">
								<div class="icon-tugas"></div>
								<a href="<?php echo base_url().'kuis'; ?>">Quiz Submission</a>
							</li>
						<?php else: ?>
							<li class="main-menu-list">
								<div class="icon-tugas"></div>
								<a href="<?php echo base_url().'my_request'; ?>">My Request</a>
							</li>
							<li class="main-menu-list" id="pc-only">
								<div class="icon-quiz"></div>
								<a href="<?php echo base_url().'kuis'; ?>">Quiz (via PC only)</a>
							</li>
							<li class="main-menu-list">
								<div class="icon-account"></div>
								<a href="<?php echo base_url().'profile/'.$this->session->userdata['logged_in']['id_user']; ?>">My Profile</a>
							</li>
			            	<li class="main-menu-list">
			            		<div class="icon-tugas"></div>
								<a href="<?php echo base_url().'nominasi'; ?>">Nominasi Panitia</a>
							</li>
						<?php endif ?>
					<?php endif ?>
	            </div>
	            <div class="main-menu-exit">
	            	<li class="main-menu-list">
						<!-- <i class="glyphicon glyphicon-log-out"></i> -->
						<a href="<?php echo base_url().'logout'; ?>">Log Out</a>
					</li>
	            </div>
	        </div>
	        <div class="smoke"></div>
	    </div>
		<div class="app-header cf"> <!-- HEADER -->
			<?php if (isset($this->session->userdata['logged_in'])): ?>
				<div class="main-menu-btn"></div>
			<?php endif ?>
			<a href="<?php echo base_url(); ?>">
				<div class="cbs-logo-wrapper">
					<img class="header-img" src="<?php echo base_url(); ?>img/logo-delphi.png">
					<div class="title">
						<?php if (!isset($this->session->userdata['logged_in'])): ?>
							CBS 2017
						<?php else: ?>
							<?php if (isset($this->session->userdata['logged_in'])): ?>
								<?php if ($this->session->userdata['logged_in']['role'] == "admin"): ?>
									Administrator CBS 2017
								<?php else: ?>
									CBS 2017
								<?php endif ?>
							<?php endif ?>
						<?php endif ?>
					</div>
				</div>
			</a>
			<ul class="nav navbar-nav">
				<?php if (isset($this->session->userdata['logged_in'])): ?>
					<li>
						<a href="<?php echo base_url().'angkatan'; ?>">Delphi 2017</a>
					</li>
					<?php if ($this->session->userdata['logged_in']['role'] != "admin"): ?> <!-- admin gaperlu liat ini -->
					<li>
						<a href="<?php echo base_url().'perkenalan'; ?>">Keluarga HIMATIF</a>
					</li>
					<li>
						<a href="<?php echo base_url().'my_request'; ?>">My Request</a>
					</li>
					<li>
						<a href="<?php echo base_url().'kuis'; ?>">Quiz</a>
					</li>
					<li>
						<a href="<?php echo base_url().'nominasi'; ?>">Nominasi Panitia CBS</a>
					</li>
					<?php endif ?>
				<?php endif ?>
				<?php if (isset($this->session->userdata['logged_in'])): ?>
					<?php if ($this->session->userdata['logged_in']['role'] == "admin"): ?>
						<li>
							<a href="<?php echo base_url().'perkenalan_keluarga'; ?>">Requests Submission</a>
						</li>
						<li>
							<a href="<?php echo base_url().'jumlah_perkenalan'; ?>">Task Progress</a>
						</li>
						<li>
							<a href="<?php echo base_url().'kuis'; ?>">Quiz Submission</a>
						</li>
					<?php endif ?>
				<?php endif ?>
			</ul>
			<!-- <ul class="nav navbar-nav">
				<li><a href="<?php echo base_url().'angkatan'; ?>">DELPHI 2017</a></li>
			</ul> -->
			<div class="nav navbar-nav navbar-right">
				<?php if (isset($this->session->userdata['logged_in'])): ?>
					<?php if ($this->session->userdata['logged_in']['role'] != "admin"): ?>
						<li>
							<a href="<?php echo base_url().'profile/'.$this->session->userdata['logged_in']['id_user']; ?>"><i class="glyphicon glyphicon-user"></i>&nbsp; <?php echo $this->session->userdata('logged_in')['npm']; ?></a>
						</li>
					<?php endif ?>
				<?php endif ?>
				<?php if (!isset($this->session->userdata['logged_in'])): ?>
					<li>
						<a href="<?php echo base_url().'login'; ?>">
							<span class="glyphicon glyphicon-log-in"></span>&nbsp; Log In
						</a>
					</li>
				<?php else: ?>
					<li>
						<a href="#" data-toggle="search" data-placement="bottom" id="search_icon">
							<span class="glyphicon glyphicon-search"></span>&nbsp; Search
						</a>
					</li>
				<?php endif ?>
			</div>
		</div>

		<div class="search-area" id="search">
			<form action="#" class="form-inline" id="searchForm" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" id="keySearch" placeholder="Keywords..." name="keySearch" onkeyup="hint(this.value)">
					<div class="input-group-btn">
						<button class="btn btn-primary" type="submit">Go</button>
					</div>
				</div>
			</form>
			<div id="hasil"></div>
		</div>

		<!-- <div class="container-fluid cf"> -->
		<div class="app-body">