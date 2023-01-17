<?php 

//membuat class produk
class Produk 
{
   //membuat beberapa property
   public $judul = 'judul', 
          $penulis = 'penulis', 
          $penerbit = 'penerbit', 
          $harga = 0;

   public function getLabel()
   {
      //this, mengacu pada property yang ada diluar method
      return "$this->penulis, $this->penerbit";
   }

}

$produk1 = new Produk();
//menimpa property judul
$produk1->judul = "Naruto";
var_dump($produk1);

//Ketika diinstance yang baru, nilai defaultnya adalah judul, bukan naruto 
$produk2 = new Produk();
var_dump($produk2->judul);

//menambahkan property yang tidak ada
$produk2->tambahProperty = 'hai';
var_dump($produk2);

echo $produk2->getLabel();


?>