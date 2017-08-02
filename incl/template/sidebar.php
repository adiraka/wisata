<div class="panel panel-default" style="margin-top:40px;">
    <div class="panel-heading">
        <div class="panel-title">
            Menu Navigasi
        </div>
    </div>
    <div class="list-group">
        <a href="beranda.php" class="list-group-item <?php $aktif = $_SERVER["PHP_SELF"]=="/wisata/beranda.php"?"active":""; echo $aktif; ?>">Beranda</a>
        <a href="profil.php" class="list-group-item <?php $aktif = $_SERVER["PHP_SELF"]=="/wisata/profil.php"?"active":""; echo $aktif; ?>">Profil Sumatera Barat</a>
        <a href="wisata.php" class="list-group-item <?php $aktif = $_SERVER["PHP_SELF"]=="/wisata/wisata.php"?"active":""; echo $aktif; ?>">Wisata Sumatera Barat</a>
        <a href="tentang.php" class="list-group-item <?php $aktif = $_SERVER["PHP_SELF"]=="/wisata/tentang.php"?"active":""; echo $aktif; ?>">Tentang Kami</a>
    </div>
</div>