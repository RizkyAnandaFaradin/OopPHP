<?php 
interface InfoProduk{
  public function getInfoProduk();
}
//membuat class abstract produk yang tidak bisa di instancesiasi
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
     
  
}

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

       
}

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


}


class CetakInfoProduk 
{
   public $daftarProduk = array();

   public function tambahProduk(Produk $produk)
   {
      return $this->daftarProduk[] = $produk;
      
   }
      
     
   //Produk pada parameter dibawah akan memaksa untuk menerima input dari instance class produk saja
   public function cetakDaftarProduk()
   {  
      $output = "DAFTAR PRODUK : <br>";

      //ini akan melakukan looping pada array $daftarProduk, yang isinya adalah $produk1, $produk2
       foreach ($this->daftarProduk as $daftarProdak) 
       {
         //lalu array yang berupa $produk1 / produk2, akan 
        $output .= $daftarProdak->getInfo()."<br>";
       }  
       return $output;
    
         
   }
}


//untuk ini, ia akan mengirimkan var ke fungsi yang ada constructnya, pertama ke class game dulu ketika tidak ada baru ke parentnya atua produk
$produk1 = new Game("Naruto", "Mashashi", "Shounen Jump", 10000, 50);
$produk2 = new Komik("Mobile Legend", "Justin Yuan", "Moonton", 40000, 100);

$prod = new CetakInfoProduk();
$prod->tambahProduk($produk1);
$prod->tambahProduk($produk2);


echo $prod->cetakDaftarProduk();










?>