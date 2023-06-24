<?php 

// require_once 'App/Produk/GetInfoProduk.php';
// require_once 'App/Produk/Produk.php';
// require_once 'App/Produk/Komik.php';
// require_once 'App/Produk/Game.php';
// require_once 'App/Produk/cetakProduk.php';
require_once 'App/init.php';

$komikNaruto = new Komik("naruto","mashashi kishimoto","erlangga",30000,0);
$game = new Game("mobile legends","moonton","moonton tetap",100000, 2);


$daftarProduk = new cetakProduk();

$daftarProduk->tambahProduk($komikNaruto);
$daftarProduk->tambahProduk($game);
$daftarProduk->cetakDaftarProduk();

$coba = new Coba();

?>