<?php 
class Karyawan {
   private $nama, $gaji ;

   public function __construct($nama , $gaji){
      $this->nama = $nama;
      $this->gaji = $gaji ;
   }

   public function getNama(){
      return $this->nama;
   }

   public function getGaji(){
      return $this->gaji;
   }

}


class Perusahaan {
   private $nama, $daftarKaryawan;

   public function __construct($nama){
      $this->nama = $nama;
      $this->daftarKaryawan = [];
   }

   public function tambahKaryawan(Karyawan $karyawan){
      $this->daftarKaryawan[] = $karyawan;
   }

   public function hitungGajiTotal(){
      $totalGaji = 0;
      foreach($this->daftarKaryawan as $karyawan){
         $totalGaji += $karyawan->getGaji();
      }
      return $totalGaji;
   }

   public function cetakInfo(){
      echo "nama perusahaan : {$this->nama} <br>";
      echo "daftar karyawan : <br>";
      foreach($this->daftarKaryawan as $karyawan){
         echo "- nama : {$karyawan->getNama()} (Gaji : {$karyawan->getGaji()})<br>";
      }
      echo "total Gaji Karyawan : {$this->hitungGajiTotal()}";
   }
}


$karyawan1 = new Karyawan("zidane",100000000);
$karyawan2 = new Karyawan("niken",50000);
var_dump($karyawan1);


$perusahaan1 = new Perusahaan("Alibaba Company");
$perusahaan1->tambahKaryawan($karyawan2);
$perusahaan1->tambahKaryawan($karyawan1);
$perusahaan1->cetakInfo();
?>