<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/forum.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/animate.css">
	<title>Forum</title>
</head>

<body>
	<div class="header">
		<div class="brand">
			<a href="#"><img class="img-brand" src="<?= base_url();?>assets/img/siap.png"></a>
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
		<h1>Sistem Informasi Pengaduan Mahasiswa</h1>
		<hr width="30%" size="5%" color="#1FAB98">
	</div><br>
	<div class="forum">
		<div class="row">
			<?php foreach ($data as $item) { ?>
			<div class="column">
				<div class="card wow slideInLeft">
					<div class="username"><?= $item['username'] ?></div>
					<div class="time-min"><?= $item['tanggal']; ?></div><br>
					<a href="<?= base_url('forum/index/'. $item['id_keluhan']) ?>" class="title-com"><?= $item['judul'] ?></a>
					<div class="status"><?= $item['status'] ?></div>
					<div class="tag">
						<ul>
							<li><?= $item['nama_kategori'] ?></li>
						</ul>
					</div>
				</div>
			</div>
			</a>
			<?php } ?>
		</div>

		<!-- <div class="row">
			<div class="column">
				<div class="card">
					<div class="username">@Anonymous</div>
					<div class="time-min">Senin, 30 Februari 2016</div><br>
					<a href="" class="title">Bantuan Gak Ndang Cair !</a>
					<div class="status">Ditindak lanjuti</div>
					<div class="tag">
						<ul>
							<li>MASALAH TEKNIS</li>
							<li>|</li>
							<li>99 KALI DILIHAT</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="column">
				<div class="card">
					<div class="username">@Anonymous</div>
					<div class="time-min">Senin, 15 Juni 2018</div><br>
					<a href="" class="title">Reformasi Dikorupsi !</a>
					<div class="status">Ditindak lanjuti</div>
					<div class="tag">
						<ul>
							<li>MASALAH TEKNIS</li>
							<li>|</li>
							<li>99 KALI DILIHAT</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="column">
				<div class="card">
					<div class="username">@Anonymous</div>
					<div class="time-min">Senin, 30 Februari 2016</div><br>
					<a href="" class="title">Turunkan UKT BNGST !</a>
					<div class="status">Ditindak lanjuti</div>
					<div class="tag">
						<ul>
							<li>MASALAH TEKNIS</li>
							<li>|</li>
							<li>99 KALI DILIHAT</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="column">
				<div class="card">
					<div class="username">@Anonymous</div>
					<div class="time-min">Senin, 30 Februari 2016</div><br>
					<a href="" class="title">Bantuan Gak Ndang Cair !</a>
					<div class="status">Ditindak lanjuti</div>
					<div class="tag">
						<ul>
							<li>MASALAH TEKNIS</li>
							<li>|</li>
							<li>99 KALI DILIHAT</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="column">
				<div class="card">
					<div class="username">@Anonymous</div>
					<div class="time-min">Senin, 15 Juni 2018</div><br>
					<a href="" class="title">Reformasi Dikorupsi !</a>
					<div class="status">Ditindak lanjuti</div>
					<div class="tag">
						<ul>
							<li>MASALAH TEKNIS</li>
							<li>|</li>
							<li>99 KALI DILIHAT</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="column">
				<div class="card">
					<div class="username">@Anonymous</div>
					<div class="time-min">Senin, 30 Februari 2016</div><br>
					<a href="" class="title">Turunkan UKT BNGST !</a>
					<div class="status">Ditindak lanjuti</div>
					<div class="tag">
						<ul>
							<li>MASALAH TEKNIS</li>
							<li>|</li>
							<li>99 KALI DILIHAT</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="column">
				<div class="card">
					<div class="username">@Anonymous</div>
					<div class="time-min">Senin, 30 Februari 2016</div><br>
					<a href="" class="title">Bantuan Gak Ndang Cair !</a>
					<div class="status">Ditindak lanjuti</div>
					<div class="tag">
						<ul>
							<li>MASALAH TEKNIS</li>
							<li>|</li>
							<li>99 KALI DILIHAT</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="column">
				<div class="card">
					<div class="username">@Anonymous</div>
					<div class="time-min">Senin, 15 Juni 2018</div><br>
					<a href="" class="title">Reformasi Dikorupsi !</a>
					<div class="status">Ditindak lanjuti</div>
					<div class="tag">
						<ul>
							<li>MASALAH TEKNIS</li>
							<li>|</li>
							<li>99 KALI DILIHAT</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="column">
				<div class="card">
					<div class="username">@Anonymous</div>
					<div class="time-min">Senin, 30 Februari 2016</div><br>
					<a href="" class="title">Turunkan UKT BNGST !</a>
					<div class="status">Ditindak lanjuti</div>
					<div class="tag">
						<ul>
							<li>MASALAH TEKNIS</li>
							<li>|</li>
							<li>99 KALI DILIHAT</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="column">
				<div class="card">
					<div class="username">@Anonymous</div>
					<div class="time-min">Senin, 30 Februari 2016</div><br>
					<a href="" class="title">Bantuan Gak Ndang Cair !</a>
					<div class="status">Ditindak lanjuti</div>
					<div class="tag">
						<ul>
							<li>MASALAH TEKNIS</li>
							<li>|</li>
							<li>99 KALI DILIHAT</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="column">
				<div class="card">
					<div class="username">@Anonymous</div>
					<div class="time-min">Senin, 15 Juni 2018</div><br>
					<a href="" class="title">Reformasi Dikorupsi !</a>
					<div class="status">Ditindak lanjuti</div>
					<div class="tag">
						<ul>
							<li>MASALAH TEKNIS</li>
							<li>|</li>
							<li>99 KALI DILIHAT</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="column">
				<div class="card">
					<div class="username">@Anonymous</div>
					<div class="time-min">Senin, 30 Februari 2016</div><br>
					<a href="" class="title">Turunkan UKT BNGST !</a>
					<div class="status">Ditindak lanjuti</div>
					<div class="tag">
						<ul>
							<li>MASALAH TEKNIS</li>
							<li>|</li>
							<li>99 KALI DILIHAT</li>
						</ul>
					</div>
				</div>
			</div>
		</div> -->

	</div>
	<br>
	<div class="footer">
		<p>Copyright &copy; 2020 SIAP<br> All rights reserved</p>
	</div>
	<script type="text/javascript" src="<?= base_url();?>assets/js/script.js"></script>
	<script src="<?= base_url();?>assets/js/wow.min.js"></script>
	<script>
		new WOW().init();

	</script>
</body>

</html>
