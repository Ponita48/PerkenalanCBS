<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Perkenalan CBS</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/user.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tree-diagram.css">
</head>
<body>
	<nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
		<div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo base_url(); ?>index.php" style="color: #FFD51E">CBS</a>
	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li><a href="<?php echo base_url(); ?>index.php">Home<span class="sr-only">(current)</span></a></li>
			<!-- TODO : ganti link profil ke profil sendiri (ambil dari session) -->
			<li><a href="<?php echo base_url(); ?>index.php/UserController/profile">Profile</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/UserController/angkatan">Angkatan</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/UserController/perkenalan">Perkenalan</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			
			<?php if (isset($this->session->userdata['logged_in'])) { ?>
				<li>
					<a href="<?php echo base_url(); ?>index.php/UserController/logout">
						<span class="glyphicon glyphicon-log-out"></span> Logout
					</a>
				</li>
			<?php }else { ?>
				<!-- TODO: tambahin if udah login -->
				<li>
					<a href="<?php echo base_url(); ?>index.php/UserController/login">
						<span class="glyphicon glyphicon-log-in"></span> Login
					</a>
				</li>
			<?php } ?>
			<li>
				<a href="#" data-toggle="search" data-placement="bottom" id="search_icon">
					<span class="glyphicon glyphicon-search"></span>
				</a>
			</li>
		</ul>
		</div>
	</nav>

	<div class="col-md-12 col-sm-12 col-lg-12" id="search" style="background-color: #FFD51E; padding: 10px; margin-top: 0; margin-bottom: 10px; display: none;">
	<center>
		<form action="#" class="form-inline" id="searchForm">
			<div class="input-group">
				<input type="text" class="form-control" id="searchKey" placeholder="Search. . .">
				<span class="input-group-btn">
					<button class="btn btn-primary">Search</button>
				</span>
			</div>
		</form>
	</center>
	</div>

	<div class="container-fluid" >