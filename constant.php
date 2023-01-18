<?php 

//ini tidak bisa disimpan dalam sebuah kelas, ini sebagai constanta global
define('NAMA', 'Rizky Ananda');

//ini bisa masuk ke dalam kelas
const UMUR = 21;

class Coba 
{
   const PEKERJAAN = 'Belum Kerja';
   
}
echo NAMA;
echo UMUR;
echo Coba::PEKERJAAN;

function coba(){
   return __FUNCTION__;
}
echo coba();

class Cooba 
{
   public $kelas = __CLASS__;
}
$obj = new Cooba();
echo $obj->kelas;



?>