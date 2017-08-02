<body>
	<h1>JUMLAH PERKENALAN KE KELUARGA</h1>
	<h6> BESAR YANG SANGAT BESAR TAPI MASIH DAPAT DIHITUNG</h6>
	<hr>

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

<style type="text/css">
	body {
		background-color: #393639;
		color: #FFD51E;
	}

</style>