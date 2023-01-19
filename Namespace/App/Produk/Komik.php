<?php 
class Komik extends Produk  implements InfoProduk
{  
   public $halaman;
   public function __construct($judul, $penulis ,$penerbit, $harga, $halaman)
   {
      //ini memanggil __construct di parent, yang berupa $this->judul dll
     parent::__construct($judul, $penulis ,$penerbit, $harga);
     $this->halaman = $halaman;

   }
  public function getInfoProduk()
  {
   // parent akan mengacu pada class produk, sehingga bukan mengacu pada function ini
       $str = "Komik: ". $this->getInfo()  ." ~ {$this->halaman} Halaman";
       return $str;
      
  } 
  
   public function getInfo()
   {
      //this, mengacu pada property yang ada diluar method
      return "{$this->getLabel()}, {$this->penerbit} (Rp. {$this->harga}) ";
   }


} ?>