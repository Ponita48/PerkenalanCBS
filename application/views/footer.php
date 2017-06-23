</div>
<div class="footer">
	<center>
		<p>&copy Devcom 2017</p>
	</center>
</div>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/sorttable.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<script>
	$(document).ready(function(){
		$('#search_icon').click(function() {
			$('#search').slideToggle("slow");
		});
		$('#tgl_lahir').datepicker();
	});
</script>
</body>