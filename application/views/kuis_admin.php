
	<div>
		<h1>ADMIN</h1>
		<hr>
		<br>
	</div>

	<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nama</th>
				<th>NPM</th>
				<th>Lihat Kuis</th>
			</tr>
		</thead>
		<tbody>

		<?php if ($result != NULL) : ?>
			<tr>
				<?php foreach ($result as $list): ?>
					<td><?php echo $list->nama; ?></td>	
					<td><?php echo $list->npm; ?></td>
					<td><a href="<?php echo base_url(); ?>kuis/jawaban/<?php echo $list->id_user; ?>" class="btn btn-success">Link</a></td>
				<?php endforeach ?>
			</tr>
		<?php endif; ?>
		</tbody>
	</table>
	</div>	