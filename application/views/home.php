<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/index.css ">
	<link rel="stylesheet" href="<?= base_url()?>assets/css/animate.css">
	<title>Beranda</title>
</head>

<body>
	<div class="header">
		<div class="brand">
			<a href="index.html"><img class="img-brand" src="<?= base_url()?>assets/img/siap.png"></a>
		</div>
		<div class="menu">
			<nav>
				<ul>
					<li><a href="home">Beranda</a></li>
					<li><a href="lapor">Lapor</a></li>
					<li><a href="forum">Forum</a></li>
					<?php
                    if (!$this->session->has_userdata('username')) { ?>
					<li><a href="register">Daftar</a></li>
					<li><a href="login">Masuk</a></li>
					<?php
                    } else{ ?>
					<li><a href="#"> <?=$this->session->userdata('username'); ?></a></li>
					<li><a href="<?= base_url('auth/logout') ?>">Logout</a></li>
					<?php }
                    ?>
				</ul>
			</nav>
			<div class="menu-toggle">
				<input type="checkbox">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<div class="judul wow fadeIn"> <br><br><br><br>
		<h1>
			Sistem Informasi Pengaduan Mahasiswa
		</h1>
		<hr class="line" size="5%" color="#1FAB98">
		<p class="title">Laporkan keluhan Anda kepada pihak kampus</p>
	</div><br><br>
	<div class="container wow slideInLeft">
		<h2 class="cont-title ">Apa itu SIAP?</h2>
		<p>Sistem informasi berbasis web yang menjembatani Mahasiswa terhadap Universitas Trunojoyo Madura dalam
			menyampaikan keluhan & permasalahan yang ada di Universitas. Kemudian pengaduan mahasiswa akan
			ditindaklanjuti oleh pihak Universitas.</p><br>
		<h2 class="cont-title">Apa manfaat SIAP?</h2>
		<p>1. Mahasiswa dapat lebih mudah dalam penyampaian keluhan atau permasalahan. <br>
			2. Staf pegelola Fasilitas Universitas Trunojoyo Madura dapat lebih mudah dalam mengolah data.</p><br>
	</div><br><br>
	<div class="plot">
		<h2>Alur Pelayanan</h2><br><br>
		<ul>
			<div class="line-plot wow rotateInDownLeft"></div>
			<li>
				<div class="bg-plot">
					<img class="img-plot1" src="<?= base_url()?>assets/img/daftar.png" alt="daftar/masuk">
				</div>
				<div>
					<div class="icon-text wow bounceIn">
						<h4>Daftar/Masuk</h4>
						Daftar/Masuk terlebih dahulu untuk melaporkan keluhan atau aspirasi anda
					</div>
				</div>
			</li>
		</ul>
		<ul>
			<div class="line-plot wow rotateInDownLeft"></div>
			<li>
				<div class="bg-plot">
					<img class="img-plot" src="<?= base_url()?>assets/img/tulis.png" alt="tulis">
				</div>
				<div>
					<div class="icon-text wow bounceIn">
						<h4>Tulis Laporan</h4>
						Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap
					</div>
				</div>
			</li>
		</ul>
		<ul>
			<div class="line-plot wow rotateInDownRight "></div>
			<li>
				<div class="bg-plot ">
					<img class="img-plot" src="<?= base_url()?>assets/img/tindak lanjut.png" alt="tindak lanjut">
				</div>
				<div>
					<div class="icon-text wow bounceIn">
						<h4>Tindak Lanjut</h4>
						Laporan Anda akan diverifikasi dan diteruskan kepada pihak berwenang
					</div>
				</div>
			</li>
		</ul>
		<ul>
			<div class="line-plot wow rotateInDownRight"></div>
			<li>
				<div class="bg-plot">
					<img class="img-plot" src="<?= base_url()?>assets/img/komentari.png" alt="komentari">
				</div>
				<div>
					<div class="icon-text wow bounceIn">
						<h4>Komentari</h4>
						Anda dapat menanggapi kembali balasan yang diberikan oleh pihak terkait
					</div>
				</div>
			</li>
		</ul>
		<ul>
			<li>
				<div class="bg-plot">
					<img class="img-plot" src="<?= base_url()?>assets/img/selesai.png" alt="selesai">
				</div>
				<div>
					<div class="icon-text wow bounceIn">
						<h4>Selesai</h4>
						Laporan Anda akan terus ditindaklanjuti hingga terselesaikan
					</div>
				</div>
			</li>
		</ul>
	</div>
	<div class="list-plot wow bounceIn">
		<ul>
			<li>
				<h3>Daftar/Masuk</h3>
				<p>Daftar/Masuk terlebih dahulu untuk melaporkan keluhan atau aspirasi anda</p>
			</li>
			<li>
				<h3>Tulis Laporan</h3>
				<p>Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap</p>
			</li>
			<li>
				<h3>Tindak Lanjut</h3>
				<p>Laporan Anda akan diverifikasi dan diteruskan kepada pihak berwenang</p>
			</li>
			<li>
				<h3>Komentari</h3>
				<p>Anda dapat menanggapi kembali balasan yang diberikan oleh pihak terkait</p>
			</li>
			<li>
				<h3>Selesai</h3>
				<p>Laporan Anda akan terus ditindaklanjuti hingga terselesaikan</p>
			</li>
		</ul>
	</div>
	<div class="complain wow bounceInDown">
		<?= form_open_multipart('lapor/simpanLaporan'); ?>
		<h2 class="wow pulse" data-wow-iteration="infinite" style="color : #1FAB98">PENGADUAN</h2><br>
		<input class="complain-input" type="text" name="judul" placeholder="Ketik judul laporan"><br><br>
		<textarea class="complain-input" rows="10" name="deskripsi" placeholder="Ketik isi laporan Anda"></textarea><br>
		<input name="tanggal" placeholder="Pilih tanggal kejadian" type="text" onfocus="(this.type='date')"
			onblur="(this.type='text')" id="" /><br><br>
		<select id="category" name="id_kategori">
			<!-- <option value="" disabled selected>Pilih Kategori Laporan Anda...</option> -->
			<?php foreach ($kategori as $item) { ?>
			<option value="<?= $item['id_kategori'] ?>"><?= $item['nama'] ?></option>
			<?php } ?>
		</select><br><br>
		<div class="fileUpload">
			<span>Upload Lampiran Foto</span>
			<input type="file" class="upload" name="gambar">
		</div><br><br>
		<?php
                    if (!$this->session->has_userdata('username')) { ?>
		<input type="button" value="Anda Harus Login Terlebih Dahulu !" disabled />
		<?php
					} else{ ?>
		<input type="hidden" name="id_user" value="<?= $this->session->userdata('id_user') ?>">
		<input type="submit" value="LAPOR !" />
		<?php }
            ?>
		<!-- <input type="button" value="LAPOR !" /> -->
		<?= form_close(); ?>
	</div><br><br>
	<div class="list-jummlah-comp wow bounceInUp">
		<h2>Jumlah Pengaduan</h2>
		<ul>
			<li>
				<h3>Hari ini</h3>
				<h1><?= $hariIni ?></h1>
			</li>
			<li>
				<h3>Bulan ini</h3>
				<h1><?= $bulanIni ?></h1>
			</li>
			<li>
				<h3>Tahun ini</h3>
				<h1><?= $bulanIni; ?></h1>
			</li>
		</ul>
	</div>
	<div class="title-hangat wow pulse" data-wow-iteration="infinite">
		<h2>Pengaduan Terhangat</h2>
	</div>
	<div class="hangat wow fadeInUpBig">
    <?php foreach ($laporan as $data ) { ?>
		<div class="kolom">
			<div>
				<div class="username">
					<h3><?= $data['username'] ?></h3>
				</div>
				<div class="time-min">
					<?= $data['tanggal'] ?>
				</div>
			</div><br>
			<a class="link-kolom" href="<?= base_url('forum/index/'.$data['id_keluhan']) ?>">
				<h2><?= $data['judul'] ?></h2><br>
			</a>
			<div class="keluhan">
				<p><?= $data['deskripsi'] ?></p><br>
			</div>
			<div class="status"><?= $data['status'] ?></div><br>
			<div class="tag">
				<ul>
					<li><?= $data['tanggal'] ?></li>
					<li>|</li>
					<li><?= $data['nama_kategori'] ?></li>
				</ul>
			</div>
		</div>
    <?php } ?>
	</div>
	<div class="footer">
		<p>Copyright &copy; 2020 SIAP<br> All rights reserved</p>
	</div>
	<script type="text/javascript" src="<?= base_url()?>assets/js/script.js"></script>
	<script src="<?= base_url()?>assets/js/wow.min.js"></script>
	<script>
		new WOW().init();

	</script>
</body>

</html>
