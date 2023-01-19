<?php 

//ini akan melihat, ada kelas apa saja yang terigistrasi pada folder produk
spl_autoload_register(function ($class){

   //__DIR__ membuat, apabila kita punya class baru langsung direquire
require_once __DIR__ . '/Produk/' . $class . '.php';
}
);
?>