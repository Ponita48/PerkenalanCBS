<? include 'header.php';?>
<html>
<head>
	<title>Layout Kuis Panitia :: Perkenalan CBS</title>
	<meta charset=utf-8>
	<meta name=description content="Yakin sudah mengenal panitia dan para anggota LK di Himatif FMIPA Unpad? Isi kuis berikut dengan BAIK dan BENAR">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<script src="../../assets/js/jquery.min.js"></script>
	<script src="../../assets/js/bootstrap.js"></script>
	<script type="text/javascript">
		function allowDrop(ev) {
		    ev.preventDefault();
		}
		function drag(ev) {
		    ev.dataTransfer.setData("text", ev.target.id);
		}
		function drop(ev) {
		    ev.preventDefault();
		    var data = ev.dataTransfer.getData("text");
		    ev.target.appendChild(document.getElementById(data));
		}
	</script>
	<style type="text/css" media="screen">
		ul li {
			padding: 0px 0px 0px 10px;
		}
	</style>
</head>
<body>
<div class="row">
	<div class="col-sm-3 col-md-3 col-lg-3">
		<div class="container-fluid">
			<nav class="navbar-nav">
				<ul class="nav nav-pills">
					<li class="active"><a href="#menu1" class="tab-content" data-toggle="pill">Panitia CBS Himatif FMIPA Unpad 2017</a></li>
					<li><a href="#menu2" class="tab-content" data-toggle="pill">BE Himatif FMIPA Unpad Kabinet Impresif</a></li>
					<li><a href="#menu3" class="tab-content" data-toggle="pill">DPA Himatif FMIPA Unpad Parlemen Insight</a></li>
					<li><a href="#menu4" class="tab-content" data-toggle="pill">Mubes Himatif FMIPA Unpad 2017</a></li>
				</ul>
			</nav>
		</div>
		<!-- <div class="list-group nav-pill">
			<a href="#menu1" class="list-group-item active" data-toggle="pill" id="opsi">Panitia CBS Himatif FMIPA Unpad 2017</a>
			<a href="#menu2" class="list-group-item" data-toggle="pill" id="opsi">BE Himatif FMIPA Unpad Kabinet Impresif</a>
			<a href="#menu3" class="list-group-item" data-toggle="pill" id="opsi">DPA Himatif FMIPA Unpad Parlemen Insight</a>
			<a href="#menu4" class="list-group-item" data-toggle="pill" id="opsi">Mubes Himatif FMIPA Unpad 2017</a>
		</div> -->
	</div>
	<div class="col-sm-7 col-md-7 col-lg-7" style="overflow: auto;">
		<div class="tab-content">
		    <div id="menu1" class="tab-pane fade in active">
		    	<h2>Panitia CBS Himatif FMIPA Unpad 2017</h2>
		    	<hr>
		    	<table style="width: 100vh;">
		    		<caption>Susunan Anggota Kepanitiaan CBS 2017</caption>
		    		<thead>
		    			<tr>
		    				<th>No.</th>
		    				<th>Foto</th>
		    				<th>Nama</th>
		    				<th>Jabatan</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			<tr>
		    				<td></td>
		    				<td id="foto_person_terpilih" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"></td>
		    				<td id="nama_person"></td>
		    				<td id="jabatan_person"></td>
		    			</tr>
		    		</tbody>
		    	</table>
		    </div>
		    <div id="menu2" class="tab-pane fade">
		    	<h2>BE Himatif FMIPA Unpad Kabinet Impresif</h2>
		    	<hr>
		    	<table style="width: 100vh;">
		    		<caption>Susunan Anggota BE Himatif FMIPA Unpad Kabinet Impresif</caption>
		    		<thead>
		    			<tr>
		    				<th>No.</th>
		    				<th>Foto</th>
		    				<th>Nama</th>
		    				<th>Jabatan</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			<tr>
		    				<td></td>
		    				<td id="foto_person_terpilih" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"></td>
		    				<td id="nama_person"></td>
		    				<td id="jabatan_person"></td>
		    			</tr>
		    		</tbody>
		    	</table>
		    </div>
		    <div id="menu3" class="tab-pane fade">
		    	<h2>DPA Himatif FMIPA Unpad Parlemen Insight</h2>
		    	<hr>
		    	<table style="width: 100vh;">
		    		<caption>Susunan Anggota DPA Himatif FMIPA Unpad Parlemen Insight</caption>
		    		<thead>
		    			<tr>
		    				<th>No.</th>
		    				<th>Foto</th>
		    				<th>Nama</th>
		    				<th>Jabatan</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			<tr>
		    				<td></td>
		    				<td id="foto_person_terpilih" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"></td>
		    				<td id="nama_person"></td>
		    				<td id="jabatan_person"></td>
		    			</tr>
		    		</tbody>
		    	</table>
		    </div>
		    <div id="menu4" class="tab-pane fade">
		    	<h2>Mubes Himatif FMIPA Unpad 2017</h2>
		    	<hr>
		    	<table style="width: 100vh;">
		    		<caption>Susunan Anggota Mubes Himatif FMIPA Unpad 2017</caption>
		    		<thead>
		    			<tr>
		    				<th>No.</th>
		    				<th>Foto</th>
		    				<th>Nama</th>
		    				<th>Jabatan</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			<tr>
		    				<td></td>
		    				<td id="foto_person_terpilih" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"></td>
		    				<td id="nama_person"></td>
		    				<td id="jabatan_person"></td>
		    			</tr>
		    		</tbody>
		    	</table>
		    </div>
		</div>
	</div>
	<div class="col-sm-2 col-md-2 col-lg-2" style="overflow: auto;">
		<table>
			<thead>
				<tr>
					<th>Foto</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td id="foto_person_opsi" ondrop="drop(event)" ondragover="allowDrop(event)" style="height: 155px; width: 115px"><img src="../../img/img1.jpg" id="drag1" draggable="true" ondragstart="drag(event)" style="width: 113.34px; height: 151.18px"></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>
