<?php 

class  ContohStatic
{
   public static $angka = 1;
   public function Halo()
   {
      //self mengacu pada public static $angka
      return "Halo.. " . self::$angka++ . " kali <br>" ;
   }
}
class  TidakStatic
{
   public $angka = 1;
   public function Halo()
   {
      //self mengacu pada public static $angka
      return "Halo.. " . $this->angka++ . " kali <br>" ;
   }
}

$obj1 = new ContohStatic();
echo " Ini menggunakan Static <br>";
for ($i=0; $i < 3 ; $i++) { 
      echo $obj1->Halo();
}

$obj2 = new ContohStatic();
echo " Ini menggunakan Static <br>";
for ($i=0; $i < 3 ; $i++) { 
      echo $obj2->Halo();
}

echo "<hr>";
$obj3 = new TidakStatic();
echo " Ini menggunakan Tidak Static <br>";
for ($i=0; $i < 3 ; $i++) { 
      echo $obj3->Halo();
}


$obj4 = new TidakStatic();
echo " Ini menggunakan Tidak Static <br>";
for ($i=0; $i < 3 ; $i++) { 
      echo $obj4->Halo();
}






?>