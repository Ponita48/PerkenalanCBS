	<div class="header-title">
		<h1 id="nama-header">SEARCH RESULT</h1>
	</div>
	<div class="col-md-12 col-sm-12 col-lg-12" id="search-content" style="padding: 10px; margin-top: 0; margin-bottom: 10px;">
	<center>
		<form action="<?php echo base_url(); ?>search" class="form-inline" id="searchForm" method="GET">
			<div class="input-group">
				<input type="text" class="form-control" id="searchKey" placeholder="Search. . ." name="keySearch" onkeyup="hahaha(this.value)">
				<span class="input-group-btn">
					<button class="btn" style="background-color: #FFD51E; color: #393636">Search</button>
				</span>
			</div>
		</form>
		<br>
	</center>
	<div><span id="hint"></span></div>
	<div class="col-sm-3 col-md-3 col-lg-3"></div>
	<div class="col-sm-6 col-md-6 col-lg-6">
		<ul class="list-group">
			<?php if (isset($hasil)): ?>
				<?php foreach ($hasil as $key): ?>
				<a class="list-group-item clearfix" href="<?php echo base_url().'profile/'.$key['id_user']; ?>">
					<?php if (is_null($key['link_foto'])): ?>
						<img src="<?php echo base_url(); ?>Photos/placeholder.png" alt="" id="poto" class="img-thumbnail" style="max-width:150px;">
					<?php else: ?>
						<img src="<?php echo $key['link_foto']; ?>" alt="" id="poto" class="img-thumbnail" style="max-width:150px;">
					<?php endif ?>
					<div class="pull-right">
						<br><br><br>
						<p id="npm"><?php echo $key['npm']; ?></p><br>
						<p id="nama"><?php echo $key['nama']; ?></p><br>
					</div>
				</a>
				<?php endforeach ?>
			<?php else: ?>
				<div class="alert alert-danger alert-dismissable">
					<span class="close" data-dismiss="alert">x</span>
					<?php echo $error_message; ?>
				</div>
			<?php endif ?>
		</ul>
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"></div>
	</div>
<script>
	function hahaha(str) {
		// document.getElementById("hint").innerHTML = "as";
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
				$("#hint").html(data);
			}
		});
	}
</script>