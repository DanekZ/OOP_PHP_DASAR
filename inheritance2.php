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
      $str = "nama: {$this->nama}<br>penerbit: {$this->pabrik}<br>harga: {$this->harga}";
      return $str;
   }

   public function buatGaris(){
      echo "<br>=================================<br>";
   }
  

}

class Buku extends produk{
   public function getInformasiBuku(){
      $str = "nama: {$this->nama}<br>penerbit: {$this->pabrik}<br>harga: {$this->harga}<br>kategori: Buku<br>jumlah halaman: {$this->halaman} halaman";
      return $str;
   }
} 

class Game extends produk {
   public function getInformasiGame()
   {
       $str = "nama: {$this->nama}<br>penerbit: {$this->pabrik}<br>harga: {$this->harga}<br>kategori: Game<br>Jam Bermain: {$this->waktumain} jam";
       return $str;
   }
}

class cetakProduk {
   public function cetak(produk $produk){
      $str =  "nama : {$produk->nama}<br> kategori : {$produk->kategori}<br>harga: {$produk->harga}";
      return $str;
   }
}



$pes = new Game("pes2023","gameloft",7000,0,50);
$bukuphp = new Buku("buku pemograman dasar php","erlangga",60000,130,0);

echo $pes->getInformasiGame();
$pes->buatGaris();
echo $bukuphp->getInformasiBuku();