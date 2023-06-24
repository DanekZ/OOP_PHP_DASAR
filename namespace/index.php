<?php 


require_once 'App/init.php';

// $komikNaruto = new Komik("naruto","mashashi kishimoto","erlangga",30000,0);
// $game = new Game("mobile legends","moonton","moonton tetap",100000, 2);


// $daftarProduk = new cetakProduk();

// $daftarProduk->tambahProduk($komikNaruto);
// $daftarProduk->tambahProduk($game);
// $daftarProduk->cetakDaftarProduk
use App\Produk\User as ProdukUser;
use App\services\User as servicesUser;


new ProdukUser();
echo "<br>";
new servicesUser();

?>