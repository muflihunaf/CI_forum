<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>css/keluhan.css">
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/animate.css">
    <title>Keluhan</title>
</head>

<body>
    <div class="header">
        <div class="brand">
            <a href="home"><img class="img-brand" src="<?= base_url('assets/');?>img/siap.png"></a>
        </div>
        <div class="menu">
            <nav>
                <ul>
                <li><a href="<?= base_url('home')?>">Beranda</a></li>
                    <li><a href="<?= base_url('lapor')?>">Lapor</a></li>
                    <li><a href="<?= base_url('forum')?>">Forum</a></li>
                    <?php
                    if (!$this->session->has_userdata('username')) { ?>
                    <li><a href="<?= base_url('register')?>">Daftar</a></li>
                    <li><a href="<?= base_url('login')?>">Masuk</a></li>
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
    <div class="kolom">
        <div class="id">
            <div class="username">
                <h3><?= $data['username']; ?></h3>
            </div>
            <div class="time-min">
                Minggu, 19:30
            </div>
        </div><br><br>
        <h2><?= $data['judul']; ?></h2><br>
        <div class="keluhan">
            <p><?= $data['deskripsi']; ?></p><br>
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
    <div class="comment-text">
        <h3>Komentar (<?= count($komentar) ?>):</h3>
    </div>
    <?php foreach ($komentar as $komen ) {
    ?>
    <div class="comment">
        <div class="id">
            <div class="username">
                <h3><?= $komen['username'] ?></h3>
            </div>
            <!-- <div class="time-min">
            </div> -->
        </div><br><br>
        <div class="keluhan">
            <p><?= $komen['balasan'] ?></p>
        </div>
    </div>
    <?php } ?>
    <div class="comment">
        <div class="keluhan">
            <form action="<?= base_url('forum/komentar') ?>" method="POST">
                <h3>Tulis Komentar</h3><br>
                <input type="hidden" name="id_user" value="<?= $this->session->userdata('id_user'); ?>">
                <input type="hidden" name="id_keluhan" value="<?= $data['id_keluhan']; ?>">
                <textarea rows="10" name="comment" placeholder="Ketik komentar anda disini"></textarea><br><br>
                <button type="submit">Komentari</button>
            </form>
        </div>
    </div>
    <div class="footer">
        <p>Copyright &copy; 2020 SIAP<br> All rights reserved</p>
    </div>
    <script src="<?= base_url('assets/')?>js/script.js"></script>
    <script src="<?= base_url('assets/')?>js/wow.min.js"></script>
    <script>new WOW().init();</script>
</body>

</html>