	
	<?php if ($this->session->flashdata('error_message')): ?>
		<br>
		<div class="alert alert-danger alert-dismissable">
			<span class="close" data-dismiss="alert">x</span>
			<?php echo $this->session->flashdata('error_message'); ?>
		</div>
	<?php endif ?>


	<?php if ($this->session->flashdata('message_display')): ?>
		<br>
		<div class="alert alert-success alert-dismissable">
			<span class="close" data-dismiss="alert">x</span>
			<?php echo $this->session->flashdata('message_display'); ?>
		</div>
	<?php endif ?>

	<?php if (isset($message_display)): ?>
		<br>
		<div class="alert alert-success alert-dismissable">
			<span class="close" data-dismiss="alert">x</span>
			<?php echo $message_display; ?>
		</div>
	<?php endif ?>
	<?php if (isset($error_message)): ?>
		<br>
		<div class="alert alert-danger alert-dismissable">
			<span class="close" data-dismiss="alert">x</span>
			<?php echo $error_message; ?>
		</div>
	<?php endif ?>

	<h1>KATA SAMBUTAN</h1>
	<center>
		<div class="carousel slide" id="perkenalan">
			<ol class="carousel-indicators">
				<li data-target="#perkenalan" data-slide-to="0" class="active"></li>
				<li data-target="#perkenalan" data-slide-to="1"></li>
				<li data-target="#perkenalan" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
				<div class="item active">
					<img src="<?php echo base_url(); ?>img/img1.jpg" alt="" class="img-responsive img-thumbnail"><br><br><br><br><br><br><br><br>
					<div class="carousel-caption">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non eligendi magnam consequatur ut, corporis consectetur aspernatur quae numquam aperiam porro nesciunt debitis possimus animi reprehenderit vero ad quod dicta omnis?</p>
						<p>-Nama Penyambut</p>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url(); ?>img/img1.jpg" alt="" class="img-responsive img-thumbnail"><br><br><br><br><br><br><br><br>
					<div class="carousel-caption">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non eligendi magnam consequatur ut, corporis consectetur aspernatur quae numquam aperiam porro nesciunt debitis possimus animi reprehenderit vero ad quod dicta omnis?</p>
						<p>-Nama Penyambut</p>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url(); ?>img/img1.jpg" alt="" class="img-responsive img-thumbnail"><br><br><br><br><br><br><br><br>
					<div class="carousel-caption">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non eligendi magnam consequatur ut, corporis consectetur aspernatur quae numquam aperiam porro nesciunt debitis possimus animi reprehenderit vero ad quod dicta omnis?</p>
						<p>-Nama Penyambut</p>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#perkenalan" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#perkenalan" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</center>