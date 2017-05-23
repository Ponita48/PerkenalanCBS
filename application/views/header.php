<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Perkenalan CBS</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/user.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/user.js"></script>
</head>
<body>
	<!-- TODO: Tambahin link buat navigasi -->
	<!-- TODO: Tambahin padding, urg males -poni -->
	<nav class="navbar navbar-inverse">
		<div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo base_url(); ?>index.php">Perkenalan CBS</a>
	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
			<li><a href="#">Profile</a></li>
			<li><a href="#">Angkatan</a></li>
			<li><a href="#">Perkenalan</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<!-- TODO: tambahin if udah login -->
			<li>
				<a href="<?php echo base_url(); ?>index.php/user/login">
					<span class="glyphicon glyphicon-log-in"></span> Login
				</a>
			</li>
			<?php if (false): ?>
				<li>
					<a href="<?php echo base_url(); ?>index.php/user/logout">
						<span class="glyphicon glyphicon-log-out"></span> Logout
					</a>
				</li>
			<?php endif ?>
		</ul>
		</div>
	</nav>

	<div class="container">
