<?php 
class produk {

   public $nama,
          $kategori,
          $pabrik,
          $harga,
          $halaman,
          $waktumain,
          $tipe;
          
          
   public function __construct($nama, $kategori, $pabrik, $harga=0,$halaman=0,$waktumain=0){
         $this->nama = $nama;
         $this->kategori = $kategori;
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
      if($this->kategori == "game"){
         $str .= "<br>kategori: {$this->kategori}<br>waktu bermain: {$this->waktumain}";
      }else if($this->kategori == "buku"){
         $str .= "<br>kategori: {$this->kategori}<br>jumlah halaman: {$this->halaman}";
      }
      return $str;

   }

   public function buatGaris(){
      echo "<br>=================================<br>";
   }
  

}

class cetakProduk {
   public function cetak(produk $produk){
      $str =  "nama : {$produk->nama}<br> kategori : {$produk->kategori}<br>harga: {$produk->harga}";
      echo $str;
   }
}



$pes = new produk("pes2023","game","gameloft",7000,0,50);
$bukuphp = new produk("buku pemograman dasar php","buku","erlangga",60000,120,0);

echo $pes->getInformasi();
$pes->buatGaris();
echo $bukuphp->getInformasi();