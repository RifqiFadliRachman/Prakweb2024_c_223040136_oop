<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakinfoProduk.php';
require_once 'App/init.php';

//$produk1 = new Komik("Naruto", "Masasi kishimoto", "Sony Computer", 30000 , 100);
//$produk2 = new Game("uncharted", "Neil Druckman", "Sony Computer", 250000, 50 );

//$cetakProduk = new CetakInfoProduk();
//$cetakProduk->tambahProduk( $produk1 );
//$cetakProduk->tambahProduk( $produk2 );
//echo $cetakProduk->cetak();

//echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();

echo "<br>";

new ProdukUser();



?>