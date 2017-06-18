<!-- TODO: Jadiin foreach (tunggu backend selesai) -->
	<div>
		<h1>DELPHI 2017</h1>
		<hr>
	</div>
	<center>
		<?php for ($i=0; $i < 10; $i++) { ?>
			<a href="#">
				<div class="col-md-3">
					<img src="<?php echo base_url(); ?>img/img1.jpg" alt="" class="img-responsive">
						<p id="nama">ini nama</p>
						<p id="npm">ini npm</p>
				</div>
			</a>
		<?php } ?>
	</center>
