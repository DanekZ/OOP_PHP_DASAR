<?php 
abstract class Produk {
   private $judul,$penulis,$penerbit;
   protected $diskon = 0 ;
   private $harga ;

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

   abstract public function getInfoProduk();

   public function getInfo(){
      $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}).";
      return $str;
   }
}

class Komik extends Produk {
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
 
}

class Game extends Produk {
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
}


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

$komikNaruto = new Komik("naruto","mashashi kishimoto","erlangga",30000,0);
$game = new Game("mobile legends","moonton","moonton tetap",0, 2);


$daftarProduk = new cetakProduk();

$daftarProduk->tambahProduk($komikNaruto);
$daftarProduk->tambahProduk($game);
$daftarProduk->cetakDaftarProduk();
?>