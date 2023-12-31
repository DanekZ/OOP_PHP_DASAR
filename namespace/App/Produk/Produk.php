<?php 
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

?>