<div class="header-title">
	<h1 id="nama-header">QUIZ SUBMISSION</h1>
</div>

<div class="wrapper-for-all">
	<div class="single-mid-box">
		<table class="table">
			<thead>
				<tr>
					<th>NPM</th>
					<th>Nama</th>
					<th>Submission</th>
				</tr>
			</thead>
			<tbody>

			<?php if ($result != NULL) : ?>
				<?php foreach ($result as $list): ?>
					<tr>
						<td><?php echo $list->npm; ?></td>
						<td><?php echo $list->nama; ?></td>	
						<td><a href="<?php echo base_url(); ?>kuis/jawaban/<?php echo $list->id_user; ?>" class="btn btn-primary" id="open">Open Quiz</a></td>
					</tr>
				<?php endforeach ?>
			<?php endif; ?>
			</tbody>
		</table>
	</div>
</div>