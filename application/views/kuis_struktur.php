<!-- Beginning of Header -->
<link rel=stylesheet href="<?php echo base_url(); ?>assets/css/bootstrap.css">
<link rel=stylesheet href="<?php echo base_url(); ?>assets/css/tree-diagram.css">
<link rel=stylesheet href="<?php echo base_url(); ?>assets/css/jquery-ui.css">
<style type="text/css" media="screen">

  #navigation-panel {
  	display: none;
  	width: 100%;
  }

  #photobar {
  	overflow: auto; 
  	height: 100vh;
  	background-color: gray;
  }

  #field_bagan {
  	overflow: auto;
  	height: 100vh;
  	background-color: #393636;
  }

  #header-content {
  	background-color: #FFD51E;
  	color: #393636;
  }

  .receiver {
  	width: 90px;
  	height: 120px;
	background-color: white;
	position: relative;
  }

  body {
  	background-color: #FFD51E;
  	color: #393636;
  }

  ul li a {
  	color: #393636;
  }

  caption {
  	color: #FFD51E;
  }

  .active a {
  	background-color: goldenrod !important;
  	color: white !important;
  }
  .img-thumbnail {
  	transition: none !important;
  }
  
</style>
<!-- End of Header -->

<form action="<?php echo base_url(); ?>kuis/submit" method="post" accept-charset="utf-8">
	<!-- Page Header -->
	<div id="header-content" class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<center>
				<h3>KUIS BK/PANITIA (<?php echo $npm; ?>)</h3>
			</center>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			<center>
				<button type="button" class="btn" id="toggleNav" style="color: #FFD51E; background-color: #393636;">Toggle Navigasi</button>
			</center>
			<br>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			<center>	
				<a href="<?php echo base_url(); ?>kuis/jawaban" class="btn btn-primary" target="_blank">Lihat Jawaban Kuis Sebelumnya</a>
			</center>
			<br>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			<center>	
				<input class="btn btn-success" type="submit" name="Kirim">
			</center>
			<br>
		</div>
	</div>
	<!-- End of Page Header -->
	<!-- Navigation Pane: Fixed, Collapsible -->
	<div id="navigation-panel" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<nav class="navbar-nav" style="background-color: white; padding: 10px; width: 100%;">
			<ul class="nav nav-pills">
				<li style="margin-right: 10px"><a href="#menu1" data-toggle="pill" target="section_kuis" onclick="sectionKuis('kuis_cbs')">Panitia CBS Himatif FMIPA Unpad 2017</a></li>
				<li style="margin-right: 10px"><a href="#menu2" data-toggle="pill" target="section_kuis" onclick="sectionKuis('kuis_be')">BE Himatif FMIPA Unpad Kabinet Impresif</a></li>
				<li style="margin-right: 10px"><a href="#menu3" data-toggle="pill" target="section_kuis" onclick="sectionKuis('kuis_dpa')">DPA Himatif FMIPA Unpad Parlemen Insight</a></li>
				<li style="margin-right: 10px"><a href="#menu4" data-toggle="pill" target="section_kuis" onclick="sectionKuis('kuis_mubes')">Mubes Himatif FMIPA Unpad 2017</a></li>
			</ul>
		</nav>
	</div>
	<!-- End of Navigation Pane -->
	<!-- Quiz Layer, dengan tab-content -->
	<div id="konten" class="col-sm-12 col-md-12 col-lg-12">
		<div class="tab-content">
	  		<div id="menu1" class="tab-pane fade in active">
	    		
			</div>
			<div id="menu2" class="tab-pane fade">
				
			</div>
			<div id="menu3" class="tab-pane fade">
				
			</div>
			<div id="menu4" class="tab-pane fade">
				
			</div> 
			<span id="section_kuis"></span>
		</div>
	</div>	
</form>

<!-- <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js" type="text/javascript"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/js/dragpack.js"></script> -->

<script>
	$ (function(){
		$('#navigation-panel').show();
		$('#toggleNav').click(function(){
		    $('#navigation-panel').slideToggle('slow');
		});

		var dropped = false;

		$('.img-thumbnail').draggable({
			appendTo: '#field_bagan',
			containment: '#konten',
			cursor: 'move',
			scroll: true,
			snap: '.receiver',
			snapMode: 'inner',
			snapTolerance: 60,
			revert: 'invalid',
		    helper: function(){
		    	$copy = $(this).clone();
		    	return $copy;
		    },
			start: function(event, ui) {
	            $(this).addClass("hide");
	        },
	        stop: function(event, ui) {
	            $(this).removeClass("hide");
	        }
		});

		$('.receiver').droppable({
			drop: function(event, ui) {
	            dropped = true;
	            $.ui.ddmanager.current.cancelHelperRemoval = true;
	            // ui.helper.appendTo(this);
	            // alert('haha');
	    	}
	    });
	});
</script>

<script>
	function sectionKuis(str) {
		$.ajax({
			type:'GET',
			url:'<?php echo base_url(); ?>kuis/'+str,
			success:function(data){
				$("#section_kuis").html(data);
			}
		});
	}
</script>