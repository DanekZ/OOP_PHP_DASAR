<?php 
/*
1.membuat kelas isiRumah 
2.membuat fungsi ruangTamu , memberi output kursi,meja dan vas
3.membuat fungsi kamarMandi, memberi output bak dan ember
4.membuat objek rumahPanggil
5.memanggil kelas dan menjalankna fungsi ruangTamu
6.memanggil fungsi kamarMandi dengan objek rumahPanggil
*/
class IsiRumah {
   public function ruangTamu(){
      echo "kursi, meja, vas";
      echo "<br>";
   }

   public function kamarMandi(){
      echo "bak, ember";
      echo "<br>";
   }
}

$rumahPanggil = new IsiRumah();
$rumahPanggil->ruangTamu();
$rumahPanggil->kamarMandi();

?>