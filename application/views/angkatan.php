<body>
	<div>
		<h1>DELPHI 2017</h1>
		<hr>
	</div>
	<center>

		<?php foreach ($result as $key): ?>
			<a href="<?php echo base_url().'profile/'.$key->id_user; ?>">
				<div class="col-md-3">
					<?php if (is_null($key->link_foto)): ?>
						<!-- TODO: ganti jadi placeholder -->
						<img src="wahaha" alt="" class="img-responsive img-thumbnail">
					<?php else: ?>
						<img src="<?php echo $key->link_foto;?>" alt="" class="img-responsive img-thumbnail">
					<?php endif ?>
					<p id="nama"><?php echo $key->nama; ?></p>
					<p id="npm"><?php echo $key->npm; ?></p>
				</div>
			</a>
		<?php endforeach ?>

	</center>
</body>	

<style type="text/css">
	img.img-responsive {
		height: auto;
		width: auto;
		display: block;
		height: 330px;
		width: 248px;
	}

	body {
		background-color: #393639;
		color: #FFD51E;
	}

</style>
