<?php 
// *balok
// -membuat kelas balok 
// -membuat property panjang,lebar dan tinggi 
// -membuat fungsi cetakVolume balok (panjang*lebar*tinggi)
// -membuat objek balok
// -mengisi data property
// -memanggil fungsi cetakVolume terhadap objek balok.
class balok {

   public $panjang,$lebar,$tinggi;

   public function cetakVolume(){
      $panjang = $this->panjang;
      $lebar = $this->lebar;
      $tinggi = $this->tinggi;
      $volume = $panjang*$lebar*$tinggi;

      echo "volume : {$volume}";

   }


}
$balok = new balok();


$balok = new balok();
$balok->panjang = 543;
$balok->lebar = 200;
$balok->tinggi = 305;
$balok1 = $balok; 
$balok1->cetakVolume();


?>