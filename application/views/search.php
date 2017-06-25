<h1>SEARCH RESULT</h1>
<hr>
<div class="col-md-12 col-sm-12 col-lg-12" id="search" style="padding: 10px; margin-top: 0; margin-bottom: 10px;">
<center>
	<form action="<?php echo base_url(); ?>UserController/search" class="form-inline" id="searchForm" method="GET">
		<div class="input-group">
			<input type="text" class="form-control" id="searchKey" placeholder="Search. . ." name="keySearch">
			<span class="input-group-btn">
				<button class="btn btn-primary">Search</button>
			</span>
		</div>
	</form>
	<br>
</center>
<div class="col-sm-3 col-md-3 col-lg-3"></div>
<div class="col-sm-6 col-md-6 col-lg-6">
	<ul class="list-group">
		<?php if (isset($hasil)): ?>
			<?php foreach ($hasil as $key): ?>
			<a class="list-group-item clearfix" href="<?php echo base_url().'UserController/lihat_profile/'.$key['id_user']; ?>">
				<img src="<?php echo base_url(); ?>img/img1.jpg" alt="" id="poto" class="img-thumbnail" style="max-width:150px;">
				<div class="pull-right">
					<br><br><br>
					<p id="npm"><?php echo $key['npm']; ?></p><br>
					<p id="nama"><?php echo $key['nama']; ?></p><br>
				</div>
			</a>
			<?php endforeach ?>
		<?php else: ?>
			<div class="alert alert-danger alert-dismissable">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
				<?php echo $message_display; ?>
			</div>
		<?php endif ?>
	</ul>
</div>
<div class="col-sm-3 col-md-3 col-lg-3"></div>
</div>