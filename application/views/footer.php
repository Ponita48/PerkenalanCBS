</div>
<!-- TODO: Tambahin style sama isi footer  -->
<div class="footer">
	<center>
		<p>&copy Devcom 2017</p>
	</center>
</div>
<script>
	$(document).ready(function(){
		$('[data-toggle="search"]').popover({
			container : "body",
			html : true,
			content: function() {
			  var content = $(this).attr("data-popover-content");
			  return $(content).children(".popover-body").html();
			}
		});
	});
</script>
</body>