<?php 
class Game extends Produk implements InfoProduk
{ 
   public $durasi;
   public function __construct($judul, $penulis ,$penerbit, $harga, $durasi)
   {
      //ini memanggil __construct di parent, yang berupa $this->judul dll
     parent::__construct($judul, $penulis ,$penerbit, $harga);
     $this->durasi = $durasi;

   }
   
   public function getInfoProduk()
  {
   // parent akan mengacu pada class produk, sehingga bukan mengacu pada function ini
       $str = "Game: ". $this->getInfo()  ."~ {$this->durasi} Jam";
       return $str;
      
  } 

 public function getInfo()
   {
      //this, mengacu pada property yang ada diluar method
      return "{$this->getLabel()}, {$this->penerbit} (Rp. {$this->harga}) ";
   }

       
}  ?>