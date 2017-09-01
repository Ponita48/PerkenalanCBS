	<div class="header-title">
		<h1>ADMIN | TUGAS KUIS</h1>
	</div>

	<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>NPM</th>
				<th>Nama</th>
				<th>Lihat Kuis</th>
			</tr>
		</thead>
		<tbody>

		<?php if ($result != NULL) : ?>
				<?php foreach ($result as $list): ?>
					<tr>
						<td><?php echo $list->npm; ?></td>
						<td><?php echo $list->nama; ?></td>	
						<td><a href="<?php echo base_url(); ?>kuis/jawaban/<?php echo $list->id_user; ?>" class="btn btn-success">Click Me :3</a></td>
					</tr>
				<?php endforeach ?>
		<?php endif; ?>
		</tbody>
	</table>
	</div>