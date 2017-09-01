<body>
	<div class="header-title">
		<h1>ADMIN | LIST TUGAS PERKENALAN</h1>
		<!-- <h6>Kenali keluarga terdekat di </h6> -->
	</div>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>NPM</th>
					<th>Jumlah Perkenalan</th>
				</tr>
			</thead>
			<tbody>
			<?php if (isset($result)): ?>
				<?php foreach ($result as $key) : ?>
					<tr>
						<td><?php echo $key->npm_peserta; ?></td>
						<td><?php echo $key->jumlah; ?></td>
					</tr>
				<?php endforeach; ?>
			<?php endif ?>
			</tbody>
		</table>
	</div>
</body>