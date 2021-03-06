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
							<p class="jabatan">Kepala Departemen Ilmu Komputer FMIPA UNPAD</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="http://informatika.unpad.ac.id/new/wp-content/uploads/2017/04/Pa-Juli-237x300.jpg" alt="" class="img-responsive img-thumbnail">
					<div class="carousel-caption">
						<p class="sambutan">Pertama-tama marilah kita panjatkan puji syukur ke hadlirat Allah SWT, yang telah melimpahkan rahmat, taufik dan hidayahNya sehingga kita senantiasa mendapatkan petunjuk dan bimbinganNya. </p>
						<p class="sambutan">Sebagaimana kita ketahui Program Studi Teknik Informatika merupakan salah satu progeam studi yang paling banyak diminati sejak pertama kali menerima mahasiswa baru pada tahun 2014. Untuk itu pada kesempatan ini, saya selaku Ketua Program Studi Teknik Informatika FMIPA Universitas Padjadjaran mengucapkan selamat datang dan selamat bergabung kepada para mahasiswa baru angkatan 2017 yang telah berhasil lulus dalam seleksi SNMPTN dan SBMPTN tahun 2017 dengan segala jerih payahnya.</p>
						<p class="sambutan">Tuntutan perubahan status dari pelajar menjadi mahasiswa berkonsekuensi terhadap peningkatan kemampuan pribadi masing-masing  mahasiswa baik kemampuam softskill dan hardskill secara individu maupun berkelompok, sehingga mahasiswa akan memiliki pola pikir yang kreatif, inovatif dan konprehensif.</p>
						<p class="sambutan">Mahasiswa haruslah menjadi pribadi yang bisa membawa perubahan yang positif, mampu memberikan solusi terhadap segala permasalahn yang ada di masyarakat serta dapat dijadikan sebagai suri tauladan yang baik di lingkungan sekitarnya.</p>
						<p class="sambutan">Banyak hal positif yang bisa dilakukan, fahami terlebih dahulu dasar-dasarnya, maksimalkan waktu selama di universitas, jangan pernah bosan untuk terus mencari ilmu, mengembangkan diri, serta mencari pengalaman sebanyak banyaknya. Seperti kata pepatah, pengalaman adalah guru terbaik dan pendidikan adalah senjata yang paling ampuh untuk mengubah dunia dan keduanya bisa didapatkan selama Anda menjadi mahasiswa.</p>
						<p class="sambutan">Sekali lagi saya ucapkan selamat datang Mahasiswa Baru S-1 Teknik Informatika Unpad dian selamat bergabung di Himatif FMIPA Unpad, serta selamat mengikuti rangkaian acara Character Building Season 2017 yang diharapkan menjadi sarana untuk saling berinteraksi, mengekplorasi kemampuan diri, meningkatka kemampuan hardskill, softskill, serta sebagai sarana untuk memahami pribadi menjadi mahasiswa sebagaimana mestinya.</p>
						<div class="name-badge">
							<p class="big-name">Dr. Juli Rejito,</p>
							<p class="jabatan">Ketua Program Studi S1 Teknik Informatika FMIPA UNPAD</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url(); ?>Photos/72.jpg" alt="" class="img-responsive img-thumbnail">
					<div class="carousel-caption">
						<p class="sambutan">Assalamualaikum Wr. Wb.</p>
						<p class="sambutan">Puji syukur kita panjatkan kepada Allah SWT, karena berkat Rahmat dan hidayahnya lah kita masih bisa menikmati nikmat Islam dan nikmat iman hingga saat ini. Tak lupa, shalawat dan salam semoga senantiasa tercurah kepada junjungan kita Rasulullah SAW, kepada keluarga nya, sahabat, serta kepada kita selaku umatnya hingga akhir zaman. Aamiin.</p>
						<p class="sambutan">Yang terhormat, bapak kepala prodi, serta jajaran civitas akademika Teknik informatika FMIPA Unpad, yang saya banggakan pula, teman-teman panitia yang selalu berusaha keras dan memberikan yang terbaik untuk kelancaran kegiatan CBS 2017, serta yang saya cinta teman-teman Delphi 2017 yang saya cintai</p>
						<p class="sambutan">Selamat datang mahasiswa-mahasiswa terbaik prodi teknik informatika FMIPA UNPAD, selamat menjalankan rangkaian kegiatan CBS 2017, lakukan yang terbaik, berikan yang terbaik pula, dan jangan pernah main-main dalam mengikuti kegiatannya. Semoga diberikan kelancaran dan kesuksesan dalam mengikuti rangkaiannya. Sekali lagi saya ucapkan selamat datang, mahasiswa pilihan!</p>
						<p class="sambutan">Sekian yang dapat saya sampaikan, mohon maaf atas segala kelebihan dan kekurangannya.</p>
						<p class="sambutan">Akhir kata, Wabillahitaufik wal hidayah, Wassalamu'alaikum Wr. Wb.</p>
						<div class="name-badge">
							<p class="big-name">Denny Febry Prayogo,</p>
							<p class="jabatan">Ketua Badan Eksekutif HIMATIF FMIPA UNPAD 2017</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="http://hda2.jux.in/foto/2015/70.jpg" alt="" class="img-responsive img-thumbnail">
					<div class="carousel-caption">
						<p class="sambutan">Assalamualaikum Wr. Wb.</p>
						<p class="sambutan">Langkah pertama akan selalu berat, namun ketika sudah berjalan maka semuanya menjadi terasa mudah. Selamat datang bagi teman-teman penerus generasi muda informatika, saya harap teman-teman selalu dalam keadaan sehat dan sejahtera. Ucapan ini juga menandakan bahwa teman-teman sudah menjadi seorang mahasiswa, yang kontribusinya bukan hanya untuk diri sendiri, tetapi untuk masyarakat luas, yang pikirannya bukan hanya sekedar nilai semester ini, tetapi mau jadi apa saya saat sudah lulus nanti.</p>
						<p class="sambutan">Maaf karena saya harus membahas topik mahasiswa lagi dan lagi, karena di masa saat orang berlomba untuk berdusta dan kejujuran hanya menjadi lelucon, teman-teman harus bisa menjadi pribadi yang jujur, bermoral, dan beretika. Mulai dari sana, dan melangkah maju sedikit demi sedikit. Saya yakin tidak semua dari teman-teman memilih program studi ini karena keinginan pribadi, mungkin ada yang desakan lingkungan atau sekedar coba-coba. Namun ingat, setengah hati dalam menjalankan sesuatu tidak akan membawa teman-teman ke mana pun.</p>
						<p class="sambutan">Terlepas dari kegiatan sebagai mahasiswa, CBS adalah sarana bagi teman-teman untuk dapat mengenal program studi dan himpunan lebih jauh juga tentang tanggung jawab sebagai mahasiswa selain dari belajar. Event ini dapat teman-teman jadikan sebagai batu loncatan dan ajang unjuk diri agar dapat lebih dikenal di kalangan dosen dan teman-teman lain yang sudah lebih dulu masuk ke program studi ini. Maka dari itu, manfaatkan dengan sebaik-baiknya, jalani dengan sungguh-sungguh dan penuh semangat, selalu ambil hikmahnya dan kritisi acaranya, cari kelemahannya, pikirkan solusinya, diskusikan dan terapkan di saat teman-teman sudah bergabung bersama kami di Himpunan Teknik Informatika FMIPA Unpad.</p>
						<p class="sambutan">Terima kasih.</p>
						<p class="sambutan">Wassalamualaikum Wr. Wb</p>
						<div class="name-badge">
							<p class="big-name">Fikri Muhammad Iqbal,</p>
							<p class="jabatan">Ketua Dewan Perwakilan Anggota HIMATIF FMIPA UNPAD 2017</p>
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
				<div class="item">
					<img src="http://hda2.jux.in/foto/2015/01.jpg" alt="" class="img-responsive img-thumbnail">
					<div class="carousel-caption">
						<p class="sambutan">Assalamu'alaikum Wr. Wb.</p>
						<p class="sambutan">Puji syukur kita panjatkan untuk ke hadirat Ilahi Rabbi. Karena dengan rahmat dan kasih-Nya kita bisa hadir pada kesempatan hari ini. Shalawat serta salam tak lupa kita curahkan kepada baginda besar kita Nabi Muhammad SAW.</p>
						<p class="sambutan">Pertama, saya ingin mengucapkan selamat datang dan selamat bergabung kepada teman-teman di prodi S-1 Teknik Informatika Unpad. Semoga teman-teman sekalian disini menjadi generasi penerus yang mampu memajukan teknologi di Indonesia.</p>
						<p class="sambutan">Ya, berbicara CBS yang merupakan singkatan dari Character Building Season. Yang artinya masa pembangunan karakter. Apa maksudnya? Teman-teman datang ke Unpad masih dengan status siswa. Untuk itu agar teman-teman bisa melepaskan status siswa menjadi mahasiswa, dibutuhkan sebuah masa dimana teman-teman mampu belajar dan membangun karakter teman-teman agar memiliki karakter seorang mahasiswa yang mampu menjadi pembawa perubahan bagi bangsa, bukan hanya mampu mengkritisi tapi juga mampu memberikan solusi.</p>
						<p class="sambutan">Untuk itu, kami selaku panitia CBS 2017 berharap acara ini dapat menjadi langkah awal bagi teman-teman sekalian untuk bisa belajar dan memiliki karakter mahasiswa yang dibutuhkan bagi negara saat ini.</p>
						<p class="sambutan">Terakhir, saya ingin mengucapkan terima kasih yang sebesar-besarnya kepada panita CBS 2017 dan seluruh pihak yang membantu demi kelancaran acara ini.</p>
						<p class="sambutan">Sekian dari saya, kurang dan lebihnya mohon maaf. Semoga teman-teman mampu aktif dan menikmati rangkaian acara ini hingga selesai.</p>
						<p class="sambutan">Sekian,</p>
						<p class="sambutan">Wassalamu'alaikum Wr. Wb.</p>
						<div class="name-badge">
							<p class="big-name">Mohammad Gilang Akbar Hikmawan,</p>
							<p class="jabatan">Ketua Character Building Season 2017</p>
						</div>
					</div>
				</div>
				<div class="carousel-indicators">
					<li data-target="#perkenalan" data-slide-to="0" class="active"></li>
					<li data-target="#perkenalan" data-slide-to="1"></li>
					<li data-target="#perkenalan" data-slide-to="2"></li>
					<li data-target="#perkenalan" data-slide-to="3"></li>
					<li data-target="#perkenalan" data-slide-to="4"></li>
					<li data-target="#perkenalan" data-slide-to="5"></li>
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
		</div>
	</center>