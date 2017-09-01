	<?php if ($this->session->flashdata('error_message')): ?>
		<div class="alert alert-danger alert-dismissable">
			<span class="close" data-dismiss="alert">x</span>
			<?php echo $this->session->flashdata('error_message'); ?>
		</div>
	<?php endif ?>


	<?php if ($this->session->flashdata('message_display')): ?>
		<div class="alert alert-success alert-dismissable">
			<span class="close" data-dismiss="alert">x</span>
			<?php echo $this->session->flashdata('message_display'); ?>
		</div>
	<?php endif ?>

	<?php if (isset($message_display)): ?>
		<div class="alert alert-success alert-dismissable">
			<span class="close" data-dismiss="alert">x</span>
			<?php echo $message_display; ?>
		</div>
	<?php endif ?>
	<?php if (isset($error_message)): ?>
		<div class="alert alert-danger alert-dismissable">
			<span class="close" data-dismiss="alert">x</span>
			<?php echo $error_message; ?>
		</div>
	<?php endif ?>
	
	<div class="header-title">
		<h1>Welcome, Delphi 2017!</h1>
	</div>
	<center>
		<div class="carousel slide" id="perkenalan">
			<div class="carousel-inner">
				<div class="item active">
					<img src="<?php echo base_url(); ?>Photos/kadep-ilkom.jpg" alt="" class="img-responsive img-thumbnail">
					<div class="carousel-caption">
					<p class="sambutan">"Pertama-tama marilah kita panjatkan puji syukur ke hadirat Tuhan Yang Maha Esa yang telah melimpahkan rahmatNya sehingga kami dapat menyambut kedatangan para mahasiswa baru S-1 Teknik Informatika FMIPA Universitas Padjadjaran angkatan 2017.</p>
					<p class="quotes">"Seribu orang tua hanya bisa bermimpi, tapi seorang pemuda bisa merubah dunia." (Ir. Soekarno).</p>
					<p class="sambutan">Pemuda adalah tonggak kemajuan sebuah bangsa. Mahasiswa adalah Agent of Change, agen perubahan yang menentukan ke arah mana bangsa akan dibawa.
Sebagai mahasiswa, kita haruslah memberikan yang terbaik untuk Bangsa Indonesia tercinta. Marilah kita membawa bangsa ini ke arah yang lebih baik dengan dukungan ilmu dan pengalaman yang diperoleh. Mulailah berubah dari hal yang kecil, mulailah berubah dari diri sendiri, dan mulailah berubah dari sekarang. Carilah pengalaman dan ilmu yang positif sebagai pondasi menuju perubahan. Ingat, satu perubahan kecil dapat membawa dampak yang besar, maka berubahlah menuju hal yang positif agar dampaknya pun positif.</p>
<p class="sambutan">Selamat datang Mahasiswa Baru S-1 Teknik Informatika Unpad di Himatif FMIPA Unpad. Selamat mengikuti rangkaian acara Character Building Season 2017 yang diharapkan menjadi momentum untuk melakukan perubahan yang positif untuk diri kalian serta lingkungan sekitar. Tetap semangat dalam mencari pengalaman dan ilmu, serta dalam mengembangkan softskill dan hardskill kalian melalui rangkaian acara Character Building Season 2017 ini."</p>
						<div class="name-badge">
							<p class="big-name">Dr. Setiawan Hadi, M.Sc.CS.,</p>
							<span class="jabatan">Kepala Departemen Ilmu Komputer FMIPA UNPAD</span>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url(); ?>img/img1.jpg" alt="" class="img-responsive img-thumbnail">
					<div class="carousel-caption">
						<p class="sambutan">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non eligendi magnam consequatur ut, corporis consectetur aspernatur quae numquam aperiam porro nesciunt debitis possimus animi reprehenderit vero ad quod dicta omnis?</p>
						<div class="name-badge">
							<p class="big-name">Dr. Juli Rejito,</p>
							<p class="jabatan">Ketua Program Studi S1 Teknik Informatika FMIPA UNPAD</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url(); ?>img/img1.jpg" alt="" class="img-responsive img-thumbnail">
					<div class="carousel-caption">
						<p class="sambutan">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non eligendi magnam consequatur ut, corporis consectetur aspernatur quae numquam aperiam porro nesciunt debitis possimus animi reprehenderit vero ad quod dicta omnis?</p>
						<div class="name-badge">
							<p class="big-name">Denny Febri Prayogo,</p>
							<p class="jabatan">Ketua Badan Eksekutif HIMATIF FMIPA UNPAD 2017</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url(); ?>img/img1.jpg" alt="" class="img-responsive img-thumbnail">
					<div class="carousel-caption">
						<p class="sambutan">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non eligendi magnam consequatur ut, corporis consectetur aspernatur quae numquam aperiam porro nesciunt debitis possimus animi reprehenderit vero ad quod dicta omnis?</p>
						<div class="name-badge">
							<p class="big-name">Gilang Hikmawan,</p>
							<p class="jabatan">Ketua Character Building Season 2017</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="http://hda2.jux.in/foto/2016/56.jpg" alt="" class="img-responsive img-thumbnail">
					<div class="carousel-caption">
						<p class="sambutan">"Mahasiswa bukan hanya status sebagai peserta didik di perguruan tinggi. Lebih dari itu, mahasiswa merupakan calon-calon pemimpin masa depan. Jadilah aktivis, praktisi, dan/atau akademisi alih alih menjadi buruh berdasi. CBS dan Himatif siap membimbing dan membersamai kita menuju cita-cita."</p>
						<div class="name-badge">
							<p class="big-name">Muhammad Ihza Triyanto,</p>
							<p class="jabatan">Presidium 1 HIMATIF FMIPA UNPAD</p>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#perkenalan" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#perkenalan" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
			<div class="carousel-indicators">
				<li data-target="#perkenalan" data-slide-to="0" class="active"></li>
				<li data-target="#perkenalan" data-slide-to="1"></li>
				<li data-target="#perkenalan" data-slide-to="2"></li>
				<li data-target="#perkenalan" data-slide-to="3"></li>
				<li data-target="#perkenalan" data-slide-to="4"></li>
			</div>
		</div>
	</center>