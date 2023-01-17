<?php 

//membuat class produk
class Produk 
{
   //membuat beberapa property
   public $judul, 
          $penulis, 
          $penerbit , 
          $harga;

   //method ini akan otomatis panggil ketika kita instance class
   public function __construct($judul, $penulis ,$penerbit, $harga)
   {
       $this->judul    =    $judul  ;    
       $this->penulis  =  $penulis  ;      
       $this->penerbit =  $penerbit ;    
       $this->harga    =    $harga  ;    
   }

   public function getLabel()
   {
      //this, mengacu pada property yang ada diluar method
      return "$this->judul, $this->penulis";
   }

}

$produk1 = new Produk("Naruto", "Mashashi", "Shounen Jump", 10);
echo "Komik : ". $produk1->getLabel();



?>