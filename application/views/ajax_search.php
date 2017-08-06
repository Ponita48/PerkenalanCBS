<?php if($result != NULL) : ?>
	<?php foreach($result as $user) : ?>
		<a class="list-group-item clearfix" href="<?php echo base_url()."profile/".$user['id_user']; ?>">
			<div class="pull-left">
				<p id="npm"><?php echo $user['npm'] ?></p>
			</div>
			<div class="pull-right">
				<p id="nama"><?php echo $user['nama'] ?></p>
			</div>
		</a>
	<?php endforeach ?>
<?php endif; ?>