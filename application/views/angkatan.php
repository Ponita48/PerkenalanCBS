
<!-- TODO: Jadiin foreach (tunggu backend selesai) -->
	<div>
		<h1>DELPHI 2017</h1>
		<hr>
	</div>
	<center>
		<?php /*for ($i=0; $i < 10; $i++) {*/ ?>
		<?php foreach ($result as $value) : ?>
			<a href="#">
				<div class="col-md-3">
					<img src="<?php echo base_url(); ?>img/img1.jpg" alt="" class="img-responsive">
						<p id="nama"><?php echo $value->nama; ?></p>
						<p id="npm"><?php echo $value->npm; ?></p>
				</div>
			</a>
		<?php endforeach; ?>
	</center>
