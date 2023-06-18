<?php 
class produk {

   public $nama,
          $kategori,
          $pabrik,
          $harga;

          
   public function __construct($nama, $kategori, $pabrik, $harga){
         $this->nama = $nama;
         $this->kategori = $kategori;
         $this->pabrik = $pabrik;
         $this->harga = $harga;
   }

   public function listInformasi(){
      return "$this->nama, $this->kategori";
   }


}

$bukuPHP = new produk("buku pemograman dasar php","buku","bukuKita", 20000);

var_dump($bukuPHP);

?>