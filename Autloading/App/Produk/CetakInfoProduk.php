<?php 
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

?>