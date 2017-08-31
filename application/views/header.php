<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delphi 2017 | Character Building Season</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/user.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tree-diagram.css">

	<link rel="icon" href="img/logo-delphi.png">
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js" type="text/javascript"></script>
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
	<nav class="navbar navbar-default" style="margin-bottom: 0px;">
		<div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-left" href="<?php echo base_url(); ?>" style="color: #FFD51E"><img src="<?php echo base_url(); ?>img/logo-delphi.png" alt=""  style="height: 50px; padding: 10px;"></a>
	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li><a href="<?php echo base_url(); ?>">Home<span class="sr-only">(current)</span></a></li>
			<li><a href="<?php echo base_url().'angkatan'; ?>">Angkatan</a></li>
			<?php if (isset($this->session->userdata['logged_in'])): ?>
				<?php if ($this->session->userdata['logged_in']['role'] == "admin"): ?>
					<li><a href="<?php echo base_url().'jumlah_perkenalan'; ?>">Admin</a></li>
					<li><a href="<?php echo base_url().'perkenalan_keluarga'; ?>">Cek Perkenalan</a></li>
				<?php else: ?>
					<li><a href="<?php echo base_url().'profile/'.$this->session->userdata['logged_in']['id_user']; ?>">Profile</a></li>
				<?php endif ?>
			<?php endif ?>
			<li><a href="<?php echo base_url().'perkenalan'; ?>">Perkenalan</a></li>
			<li class="dropdown">
				<a href="<?php echo base_url().'kuis'; ?>">Kuis</a>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li>
				<a href="#" data-toggle="search" data-placement="bottom" id="search_icon">
					<span class="glyphicon glyphicon-search"></span>&nbsp; Search
				</a>
			</li>
			<?php if (isset($this->session->userdata['logged_in'])): ?>
				<li>
					<a href="<?php echo base_url().'logout'; ?>">
						<span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout
					</a>
				</li>
			<?php else: ?>
				<li>
					<a href="<?php echo base_url().'login'; ?>">
						<span class="glyphicon glyphicon-log-in"></span>&nbsp; Login
					</a>
				</li>
			<?php endif ?>
		</ul>
		</div>
	</nav>

	<div class="search-area" id="search">
		<form action="<?php echo base_url(); ?>UserController/search" class="form-inline" id="searchForm" method="GET">
			<div class="input-group">
				<input type="text" class="form-control" id="keySearch" placeholder="Keywords..." name="keySearch" onkeyup="hint(this.value)">
				<span class="input-group-btn">
					<button class="btn btn-primary" type="submit">Go</button>
				</span>
			</div>
		</form>
	<div><span id="hasil"></span></div>
	</div>

	<div class="container-fluid cf">