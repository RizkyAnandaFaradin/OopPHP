<?php 

//membuat class produk
class Produk 
{
   //membuat beberapa property
   public $judul, 
          $penulis, 
          $penerbit, 
          $harga;
  

   //method ini akan otomatis panggil ketika kita instance class
   public function __construct($judul, $penulis ,$penerbit, $harga, $halaman, $durasi)
   {
       $this->judul    =    $judul  ;    
       $this->penulis  =    $penulis  ;      
       $this->penerbit =    $penerbit ;    
       $this->harga    =    $harga  ;    
 
   }

   public function getLabel()
   {
      //this, mengacu pada property yang ada diluar method
      return "$this->judul | $this->penulis";
   }

   
   public function getInfoProduk()
   {
      //this, mengacu pada property yang ada diluar method
      return "{$this->getLabel()}, {$this->penerbit} (Rp. {$this->harga}) ";
   }


  
}

class Game extends Produk 
{ 
   
   public function getInfoProduk()
  {
   // parent akan mengacu pada class produk, sehingga bukan mengacu pada function ini
       $str = "Game: ". parent::getInfoProduk()  ."~ {$this->durasi} Jam";
       return $str;
      
  } 
   // public function cetak()
   // {
   //   echo "{$this->judul} | {$this->getLabel()} ( Rp. {$this->harga}) ~ {$this->durasi} Jam";
   // }
      
}

class Komik extends Produk 
{  
  public function getInfoProduk()
  {
   // parent akan mengacu pada class produk, sehingga bukan mengacu pada function ini
       $str = "Komik:". parent::getInfoProduk()  ." ~ {$this->halaman} Halaman";
       return $str;
      
  } 
  
}


class CetakInfoProduk 
{
   //Produk pada parameter dibawah akan memaksa untuk menerima input dari instance class produk saja
   public function cetak(Produk $produk)
   {  
          
       $str = "{$produk->judul} | {$produk->getLabel()} ( Rp. {$produk->harga}) ~ {$produk->durasi} ";
       return $str;
         
   }
}

$produk1 = new Game("Naruto", "Mashashi", "Shounen Jump", 10000, 0, "100");
$produk2 = new Komik("Mobile Legend", "Justin Yuan", "Moonton", 40000, "50", 0);



echo $produk1->getInfoProduk($produk1);
echo "<br>";
echo $produk2->getInfoProduk($produk2);










?>