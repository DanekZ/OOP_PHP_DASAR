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

class CetakProduk {
    public function cetak(produk $produk){
      $str = "judul : {$produk->nama}, kategori: {$produk->kategori}, harga : {$produk->harga}";
      return $str;
   }
}

$bukuPHP = new produk("buku pemograman dasar php","buku","bukuKita", 20000);
$cetakBukuPHP = new CetakProduk();



echo $bukuPHP->listInformasi();
echo "<br>";
echo $cetakBukuPHP->cetak($bukuPHP);
?>