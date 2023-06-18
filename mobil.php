<?php 
class Mobil{
   public $nama,$warna,$tahunProduksi;

   public function printMobil(){
      echo "nama : {$this->nama}";
      echo "<br>";
      echo "warna : {$this->warna}";
      echo "<br>";
      echo "tahun produksi : {$this->tahunProduksi}";
      echo "<br>";
   }

   public function cetakGaris(){
      echo "====================================================";
      echo "<br>";
   }


}

// membuat objek
$mobilku = new Mobil();

$mobilku->nama = "lambhorgini";
$mobilku->warna = "merah";
$mobilku->tahunProduksi = 2023;

$mobilA = new Mobil();
$mobilA->nama = "ferrari";
$mobilA->warna = "biru";
$mobilA->tahunProduksi = 2019;
// tutup membuat objek

// membuat cetak
$mobilku->printMobil();
$mobilku->cetakGaris();
$mobilA->printMobil();
$mobilA->cetakGaris();

// -membuat kelas mobil
//  *properti warna,nama dan tahunproduksi
//  *method print mobil, membuat print tentang nama,warna dan tahun produksi 
//  *method garis

// -membuat objek mobilku dan mobilA. 
// -mengisi properti 
// -cetak mobilku
// -membuat cetak garis 
// -cetak mobilA
?>