<?php 
class produk {

   public $nama,
          $kategori,
          $pabrik,
          $warna;

   public function listInformasi(){
      return "$this->nama, $this->kategori";
   }


}

$bukuPHP = new produk();
$bukuPHP->nama = "buku pemograman dasar php";
$bukuPHP->kategori = "buku";
$bukuPHP->pabrik = "bukuKita";
$bukuPHP->warna = "biru";

var_dump($bukuPHP);

?>