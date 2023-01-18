<?php 

//membuat class produk
class Produk 
{
   //membuat beberapa property
   //ini hanya bisa di akses lewat class produk saja
   private  $judul, 
            $penulis, 
            $penerbit,
            $harga,
            $diskon;
  

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

   
   public function getInfoProduk()
   {
      //this, mengacu pada property yang ada diluar method
      return "{$this->getLabel()}, {$this->penerbit} (Rp. {$this->harga}) ";
   }



//============================Setter dan Getter==========================

    //==========Setter dan Getter untuk Diskon===================
   public function setDiskon($diskon)
   {
     $this->diskon = $diskon;
   }

   public function getDiskon()
   {
     return $this->diskon;
   }


    //==========Setter dan Getter untuk Harga====================
   public function getHarga()
   {
      //this, mengacu pada property yang ada diluar method
      return $this->harga - ($this->harga * $this->diskon / 100);
   }
     public function setHarga($input)
   {
     $this->harga = $input;
   }


   //==========Setter dan Getter untuk Judul====================
   public function setJudul($input)
   {
     $this->judul = $input;
   }
     public function getJudul()
   {
      return $this->judul;
   }


   //==========Setter dan Getter untuk Penulis====================
      public function setPenulis($input)
   {
     $this->penulis = $input;
   }

     public function getPenulis()
   {
      return $this->penulis;
   }


   //==========Setter dan Getter untuk Penerbit====================
      public function setPenerbit($input)
   {
     $this->penerbit = $input;
   }

     public function getPenerbit()
   {
      return $this->penerbit;
   }
  
  
}

class Game extends Produk 
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
       $str = "Game: ". parent::getInfoProduk()  ."~ {$this->durasi} Jam";
       return $str;
      
  } 
       
}

class Komik extends Produk 
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


//untuk ini, ia akan mengirimkan var ke fungsi yang ada constructnya, pertama ke class game dulu ketika tidak ada baru ke parentnya atua produk
$produk1 = new Game("Naruto", "Mashashi", "Shounen Jump", 10000, 50);
$produk2 = new Komik("Mobile Legend", "Justin Yuan", "Moonton", 40000, 100);



echo $produk1->getInfoProduk($produk1);
echo "<br>";
echo $produk2->getInfoProduk($produk2);
echo "<hr>";

$produk1->setDiskon(50);
echo $produk1->getHarga();
echo "<hr>";
$produk1->setJudul(1);
echo $produk1->getDiskon();








?>