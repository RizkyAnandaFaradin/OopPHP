<?php 

//membuat class produk
class Produk 
{
   //membuat beberapa property
   public $judul, 
          $penulis, 
          $penerbit, 
          $harga,
          $durasi,
          $halaman;

   //method ini akan otomatis panggil ketika kita instance class
   public function __construct($judul, $penulis ,$penerbit, $harga, $halaman, $durasi)
   {
       $this->judul    =    $judul  ;    
       $this->penulis  =  $penulis  ;      
       $this->penerbit =  $penerbit ;    
       $this->harga    =    $harga  ;    
       $this->halaman    =    $halaman  ;    
       $this->durasi    =    $durasi  ;    


   }

   public function getLabel()
   {
      //this, mengacu pada property yang ada diluar method
      return "$this->penulis, $this->penerbit";
   }


  
}

class Game extends Produk 
{ 
   
   public function getInfoProduk()
  {
       $str = "Game: {$this->judul} | {$this->getLabel()} ( Rp. {$this->harga}) ~ {$this->durasi} ";
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
       $str = "Komik: {$this->judul} | {$this->getLabel()} ( Rp. {$this->harga}) ~ {$this->halaman} ";
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