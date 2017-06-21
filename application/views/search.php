<h1>SEARCH RESULT</h1>
<hr>
<div class="col-md-12 col-sm-12 col-lg-12" id="search" style="padding: 10px; margin-top: 0; margin-bottom: 10px;">
<center>
	<form action="#" class="form-inline" id="searchForm">
		<div class="input-group">
			<input type="text" class="form-control" id="searchKey" placeholder="Search. . .">
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
		<?php for ($i=0; $i < 5; $i++) { ?>
		<a class="list-group-item clearfix" href="#">
			<img src="<?php echo base_url(); ?>img/img1.jpg" alt="" id="poto" class="img-thumbnail" style="max-width:150px;">
			<div class="pull-right">
				<br><br><br>
				<p id="npm">NPM</p><br>
				<p id="nama">NAMA</p>
			</div>
		</a>
		<?php } ?>
	</ul>
</div>
<div class="col-sm-3 col-md-3 col-lg-3"></div>
</div>