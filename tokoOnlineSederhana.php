<?php  
class Produk {
   private $nama, $harga, $stock;

   public function __construct($nama, $harga, $stock){

       $this->nama = $nama;
       $this->harga = $harga;
       $this->stock = $stock;

   }

   public function getNama(){
      return $this->nama;
   }

   public function getHarga(){
      return $this->harga;    
   }
   public function getStock(){
      return $this->stock;
   }

   public function kurangStock($jumlah){
      $stock = $this->getStock();
      $stock -= $jumlah;
      return   $this->stock = $stock;
   
   }

  

   public function informasiProduk(){
      return "nama: ". $this->getNama(). ",harga: ".$this->getHarga().",sisa stock: ".$this->getStock()." ";
   }
}

class Pelanggan {
   private $nama, $alamat;
   private $daftarPemesanan = [];

   public function __construct($nama, $alamat){
      $this->nama = $nama;
      $this->alamat = $alamat;
   }

   public function getNama(){
      return $this->nama;
   }

   public function getAlamat(){
      return $this->alamat;
   }

   public function pesanProduk($produk, $jumlah){
      if($produk->getStock() >= $jumlah){
         $this->daftarPemesanan[]= ['produk' => $produk, 'jumlah' => $jumlah];
         $produk->kurangStock($jumlah);
         echo "pesanan terkirim";
      } else {
         echo "pesanan gagal terkirim";
      }
   }

   public function informasiPemesanan(){
      $informasi = "Informasi pemesanan untuk pelanggan " .$this->nama . ":<br>";

      foreach($this->daftarPemesanan as $pemesanan){
         $produk = $pemesanan['produk'];
         $jumlah = $pemesanan['jumlah'];
         $informasi .= $produk->informasiProduk(). "jumlah: ".$jumlah;
      }
      return $informasi;
   }
}

$produk1 = new Produk("kondom",21000,10);


$zidane = new Pelanggan("zidane","perumahan bukit pinang bahari");
echo "<br>";
$zidane->pesanProduk($produk1,7);
echo "<br>";
echo $zidane->informasiPemesanan();

?>