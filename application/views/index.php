	<?php if (isset($message_display)): ?>
		<br>
		<div class="alert alert-success alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
			<?php echo $message_display; ?>
		</div>
	<?php endif ?>
	<h1>KATA SAMBUTAN</h1>
	<center>
		<?php for ($i=0; $i < 5; $i++) {  ?>
			<hr>
			<h2>Nama Penyambut</h2>
			<img src="<?php echo base_url(); ?>img/img1.jpg" alt="" class="img-responsive img-thumbnail" width="200" height="200">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non eligendi magnam consequatur ut, corporis consectetur aspernatur quae numquam aperiam porro nesciunt debitis possimus animi reprehenderit vero ad quod dicta omnis?</p>
		<?php } ?>
	</center>