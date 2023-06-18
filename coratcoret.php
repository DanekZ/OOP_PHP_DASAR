<?php 
class alpha {
   private $a = 5 ;


   public function info(){
      echo "a = {$this->a}";
   }
}

class bravo extends alpha {
   private $b = 10;

   public function infoLagi(){
      echo "b = {$this->b}";
   }
  
}


$ob = new alpha();
$obj = new bravo();

$obj->info();
$ob->infoLagi();
?>