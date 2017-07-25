	<div>
		<h1>DELPHI 2017</h1>
		<hr>
	</div>
	<center>

		<?php foreach ($result as $key): ?>
			<a href="<?php echo base_url().'profile/'.$key->id_user; ?>">
				<div class="col-md-3">
					<img src="<?php echo $key->link_foto;?>" alt="" class="img-responsive">
						<p id="nama"><?php echo $key->nama; ?></p>
						<p id="npm"><?php echo $key->npm; ?></p>
				</div>
			</a>
		<?php endforeach ?>

	</center>
