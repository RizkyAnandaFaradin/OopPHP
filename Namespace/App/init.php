<?php 

//ini akan melihat, ada kelas apa saja yang terigistrasi pada folder produk
spl_autoload_register(function ($class){
   
   //ini akan menjadi App\Produk\User = ["App", "Produk", "User"]
   $class = explode('\\', $class);

   //ini akan mengambil niali akhir dari array, yaitu user
   $class = end($class);
   //__DIR__ membuat, apabila kita punya class baru langsung direquire
   require_once __DIR__ . '/Produk/' . $class . '.php';
});

spl_autoload_register(function ($class){
   
   //ini akan menjadi App\Service\User = ["App", "Produk", "User"]
   $class = explode('\\', $class);

   //ini akan mengambil niali akhir dari array, yaitu user
   $class = end($class);
   //__DIR__ membuat, apabila kita punya class baru langsung direquire
   require_once __DIR__ . '/Service/' . $class . '.php';
});
?>