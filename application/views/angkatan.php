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
						<img src="https://upload.wikimedia.org/wikipedia/en/b/b1/Portrait_placeholder.png" alt="" class="img-responsive img-thumbnail">
					<?php else: ?>
						<img src="<?php echo $key->link_foto;?>" alt="" class="img-responsive img-thumbnail">
					<?php endif ?>
					<?php if (is_null($key->nama)): ?>
						<p id="nama"><?php echo $key->npm; ?></p>
					<?php else: ?>
						<p id="nama"><?php echo $key->nama; ?></p>
					<?php endif ?>
					<p id="npm"><?php echo $key->npm; ?></p>
				</div>
			</a>
		<?php endforeach ?>

	</center>
