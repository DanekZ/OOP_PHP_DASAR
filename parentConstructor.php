<?php 
class produk {

   public $nama,
          $pabrik,
          $harga;
          
          
   public function __construct($nama, $pabrik, $harga=0){
         $this->nama = $nama;
         $this->pabrik = $pabrik;
         $this->harga = $harga;
   }

   public function listInformasi(){
      return "$this->nama";
   }

   public function getInformasi(){
      // nama: nama
      // penerbit:
      // harga:
      // jumlah halaman / jumlah bermain :
      $str = "nama: {$this->nama}<br>penerbit: {$this->pabrik}<br>harga: {$this->harga}<br>";
      return $str;
   }

   public function buatGaris(){
      echo "<br>=================================<br>";
   }
  

}

class Buku extends produk{
   public $halaman;

   public function __construct($nama, $pabrik, $harga=0,$halaman=0){
      parent::__construct($nama,$pabrik,$harga);
      $this->halaman = $halaman;
   }

   public function getInformasi(){
      $str = parent::getInformasi()."kategori: Buku<br>jumlah halaman: {$this->halaman} halaman";
      return $str;
   }
} 

class Game extends produk {
   public $waktumain;
   public function __construct($nama, $pabrik, $harga=0,$waktumain=0){
      parent::__construct($nama,$pabrik,$harga);
      $this->waktumain = $waktumain;
   }

   public function getInformasi()
   {
       $str = parent::getInformasi()."kategori: Game<br>Jam Bermain: {$this->waktumain} jam";
       return $str;
   }
}

class cetakProduk {
   public function cetak(produk $produk){
      $str =  "nama : {$produk->nama}<br> kategori : {$produk->kategori}<br>harga: {$produk->harga}";
      return $str;
   }
}



$pes = new Game("pes2022","gameloft",7000,50);
$bukuphp = new Buku("buku pemograman dasar c++","erlangga",70000,130);

echo $pes->getInformasi();
$pes->buatGaris();
echo $bukuphp->getInformasi();