<!DOCTYPE html>

<html lang="en">

    <head>

        <title>Selamat Datang</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/app.css">

        <script src="assets/vendor/jquery/js/jquery.min.js"></script>

    </head>
    
    <body>

        <nav class="navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-navigasi" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">Wonderfull Indonesia</a>
                </div>
                <div class="collapse navbar-collapse" id="menu-navigasi">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="<?php $aktif = $_SERVER["PHP_SELF"]=="/wisata/beranda.php"?"active":""; echo $aktif; ?>"><a href="beranda.php">Beranda</a></li>
                        <li class="<?php $aktif = $_SERVER["PHP_SELF"]=="/wisata/profil.php"?"active":""; echo $aktif; ?>"><a href="profil.php">Profil Sumatera Barat</a></li>
                        <li class="<?php $aktif = $_SERVER["PHP_SELF"]=="/wisata/wisata.php"?"active":""; echo $aktif; ?>"><a href="wisata.php">Wisata Sumatera Barat</a></li>
                        <li class="<?php $aktif = $_SERVER["PHP_SELF"]=="/wisata/tentang.php"?"active":""; echo $aktif; ?>"><a href="tentang.php">Tentang Kami</a></li>
                    </ul>
                </div>
            </div>
        </nav>