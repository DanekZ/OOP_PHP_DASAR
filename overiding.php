<?php 
class produk {

   public $nama,
          $kategori,
          $pabrik,
          $harga,
          $halaman,
          $waktumain,
          $tipe;
          
          
   public function __construct($nama, $pabrik, $harga=0,$halaman=0,$waktumain=0){
         $this->nama = $nama;
         $this->pabrik = $pabrik;
         $this->harga = $harga;
         $this->halaman = $halaman;
         $this->waktumain = $waktumain;
   }

   public function listInformasi(){
      return "$this->nama, $this->kategori";
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
   public function getInformasi(){
      $str = parent::getInformasi()."kategori: Buku<br>jumlah halaman: {$this->halaman} halaman";
      return $str;
   }
} 

class Game extends produk {
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



$pes = new Game("pes2022","gameloft",7000,0,50);
$bukuphp = new Buku("buku pemograman dasar javascript","erlangga",60000,130,0);

echo $pes->getInformasi();
$pes->buatGaris();
echo $bukuphp->getInformasi();