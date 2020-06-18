<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/login.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/animate.css">
    <title>Register</title>
</head>

<body>
    <div class="header">
        <div class="brand">
            <a href="index"><img class="img-brand" src="<?= base_url()?>assets/img/siap.png"></a>
        </div>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="home">Beranda</a></li>
                    <li><a href="lapor">Lapor</a></li>
                    <li><a href="forum">Forum</a></li>
                    <li><a href="register">Daftar</a></li>
                    <li><a href="login">Masuk</a></li>
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

    <div class="sign-up wow fadeInDown">
        <form action="<?= base_url('auth/register') ?>" method="POST">
            <h2 style="color : white">Daftar</h2><br>
            <input type="text" name="nim" placeholder="NIM"><br>
            <?= form_error('nim', '<small>','</small>') ?>
            <br>
            <input type="email" name="email" placeholder="Email"><br>
            <?= form_error('email', '<small>','</small>') ?><br>
            <input type="text" name="nama" placeholder="Nama"><br>
            <?= form_error('nama', '<small>','</small>') ?><br>
            <input type="text" name="username" placeholder="Username"><br>
            <?= form_error('username', '<small>','</small>') ?><br>
            <input type="password" name="password" placeholder="Kata sandi"><br><br>
            <?= form_error('password', '<small>','</small>') ?>
            <input type="password" name="password2" placeholder="Ulangi kata sandi"><br><br>
            <button type="submit" >Daftar</button><br><br> Sudah punya akun?<a href="login.html">Masuk</a>
        </form>
    </div>
    <br><br>
    <div class="footer">
        <p>Copyright &copy; 2020 SIAP<br> All rights reserved</p>
    </div>
    <script src="<?= base_url()?>assets/js/script.js"></script>
    <script src="<?= base_url()?>assets/js/wow.min.js"></script>
    <script>new WOW().init();</script>
</body>

</html>