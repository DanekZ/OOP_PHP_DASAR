<?php 
// require_once 'Produk/GetInfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/cetakProduk.php';
// require_once 'Produk/User.php';
// require_once 'services/User.php';


spl_autoload_register(function($class){
   $class = explode('\\',$class);
   $class = end($class);
   require_once __DIR__ . "/Produk/". $class . ".php";
});

spl_autoload_register(function($class){
   $class = explode('\\',$class);
   $class = end($class);
   require_once __DIR__.'/services/'.$class.'.php';
});
?>