<?php 

interface GetInfoProduk {
   public function getInfoProduk();
}


// kelas produk 
abstract class Produk {
   protected $judul,$penulis,$penerbit;
   protected $diskon , $harga ;

   public function __construct($judul = "judul",$penulis = "penulis", $penerbit = "penerbit", $harga = 0){
      $this->judul = $judul ;
      $this->penulis= $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
   }

   public function setJudul($judul){
      $this->judul = $judul; 
   }

   public function getJudul(){
      return $this->judul;
   }

   public function getHarga(){
      return $this->harga - ($this->harga * $this->diskon/100);
   }

   public function setPenerbit($penerbit){
      $this->penerbit = $penerbit;
   }

   public function getPenerbit(){
      return $this->penerbit;
   }

   public function getLabel(){
      return "$this->penulis , $this->penerbit";
   }
   abstract public function getInfo();
}
// tutup kelas produk


// kelas komik
class Komik extends Produk implements GetInfoProduk {
   public $jmlHalaman;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
      
      parent::__construct($judul, $penulis, $penerbit, $harga);
      $this->jmlHalaman = $jmlHalaman;
   }

   public function getInfoProduk()
   {
      $str = "komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
      return $str;
   }
   public function getInfo(){
      $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}).";
      return $str;
   }
 
}
// tutup kelas komik

// kelas game
class Game extends Produk implements GetInfoProduk {
   public $waktuMain;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
      parent::__construct($judul, $penulis, $penerbit, $harga);

      $this->waktuMain = $waktuMain;
   }

   public function setDiskon($diskon){
      $this->diskon = $diskon;
   }

   public function getInfoProduk()
   {
      $str = "Game : ". $this->getInfo(). " - {$this->waktuMain} Jam.";
      return $str; 
   }

   public function getInfo(){
      $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}).";
      return $str;
   }
}

// tutup kelas game 


// kelas cetak produk
class cetakProduk {
   public $daftarProduk = array();

   public function tambahProduk( Produk $produk){
      return  $this->daftarProduk [] = $produk ;    
   }  

   public function cetakDaftarProduk(){
      $i = 1 ;
      foreach($this->daftarProduk as $produk){
         echo "daftar produk : <br>";
         echo "{$i}. {$produk->getInfoProduk()} <br>";
         $i++;
      }
   }
}
// tutup kelas cetak produk

$komikNaruto = new Komik("naruto","mashashi kishimoto","erlangga",30000,0);
$game = new Game("mobile legends","moonton","moonton tetap",0, 2);


$daftarProduk = new cetakProduk();

$daftarProduk->tambahProduk($komikNaruto);
$daftarProduk->tambahProduk($game);
$daftarProduk->cetakDaftarProduk();
?>