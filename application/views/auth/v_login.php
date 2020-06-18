<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/login.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/animate.css">
    <title>Login</title>
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
    <?= $this->session->flashdata('message'); ?>
    <div class="sign-in wow fadeInDown">
        <form action="<?= base_url('auth/login') ?>" method="POST">
            <h2 style="color : white">Masuk</h2><br>
            <input type="email" name="email" placeholder="Email"><br>
            <?= form_error('email', '<small>','</small>') ?><br><br>
            <input type="password" name="password" placeholder="Kata sandi"><br><br>
            <?= form_error('password', '<small>','</small>') ?><br>
            <button type="submit" >Login</button><br><br>
            <br><br><br><br><br><br> Belum punya akun?<a href="register">Daftar</a>
        </form>
    </div>
    <div class="footer">
        <p>Copyright &copy; 2020 SIAP<br> All rights reserved</p>
    </div>
    <script src="<?= base_url()?>assets/js/script.js"></script>
    <script src="<?= base_url()?>assets/js/wow.min.js"></script>
    <script>new WOW().init();</script>
</body>

</html>