	<div class="header-title">
		<h1 id="nama-angkatan">DELPHI 2017</h1>
	</div>
	<div class="all-person-box">
		<center>
		<?php foreach ($result as $key): ?>
			<a class="person-box" href="<?php echo base_url().'profile/'.$key->id_user; ?>">
				<!-- <div class="person-box"> -->
					<?php if (is_null($key->link_foto)): ?>
						<!-- TODO: ganti jadi placeholder -->
						<img src="https://upload.wikimedia.org/wikipedia/en/b/b1/Portrait_placeholder.png" alt="" class="img-responsive img-thumbnail">
					<?php else: ?>
						<img src="<?php echo $key->link_foto;?>" alt="" class="img-responsive img-thumbnail">
					<?php endif ?>
					<div class="identity">
						<?php if (is_null($key->nama)): ?>
							<p id="nama"><?php echo $key->npm; ?></p>
						<?php else: ?>
							<p id="nama"><?php echo $key->nama; ?></p>
						<?php endif ?>
						<p id="npm"><?php echo $key->npm; ?></p>
					</div>
				<!-- </div> -->
			</a>
		<?php endforeach ?>
		</center>
	</div>