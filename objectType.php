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
      return "$this->penulis, $this->penerbit";
   }

}

class CetakInfoProduk 
{
   //Produk pada parameter dibawah akan memaksa untuk menerima input dari instance class produk saja
   public function cetak(Produk $produk)
   {
       $str = "{$produk->judul} | {$produk->getLabel()} ( Rp. {$produk->harga}) ";
       return $str;
   }
}

$produk1 = new Produk("Naruto", "Mashashi", "Shounen Jump", 10000);
$produk2 = new Produk("Mobile Legend", "Justin Yuan", "Moonton", 40000);

$cetakInfo = new CetakInfoProduk();

echo "Komik : ".$cetakInfo->cetak($produk1);
echo "<br>";
echo "Game : ".$cetakInfo->cetak($produk2);








?>