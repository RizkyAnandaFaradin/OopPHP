<?php //membuat class abstract produk yang tidak bisa di instancesiasi
abstract class Produk 
{
   //membuat beberapa property
   protected $judul, 
           $penulis, 
           $penerbit, 
           $harga;
  

   //method ini akan otomatis panggil ketika kita instance class
   public function __construct($judul, $penulis ,$penerbit, $harga)
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
  
   abstract public function getInfo();
     
  
}  ?>