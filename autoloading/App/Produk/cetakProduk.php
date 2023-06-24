<?php 
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

?>