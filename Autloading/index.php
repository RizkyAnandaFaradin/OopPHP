<?php 

require 'App/init.php';
//untuk ini, ia akan mengirimkan var ke fungsi yang ada constructnya, pertama ke class game dulu ketika tidak ada baru ke parentnya atua produk
$produk1 = new Game("Naruto", "Mashashi", "Shounen Jump", 10000, 50);
$produk2 = new Komik("Mobile Legend", "Justin Yuan", "Moonton", 40000, 100);

$prod = new CetakInfoProduk();
$prod->tambahProduk($produk1);
$prod->tambahProduk($produk2);


echo $prod->cetakDaftarProduk();


?>