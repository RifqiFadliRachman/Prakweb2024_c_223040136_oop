<?php
// define('NAMA', 'Rifqi Fadli Rachman');
// echo NAMA;
//
// echo "<br>";
//
// const UMUR = 20;
// echo UMUR;
//
//
// class Coba {
//   const NAMA = 'Fadli';
// }
//
// echo Coba::NAMA;


//echo __FILE__;

//function coba() {
//     return __FUNCTION__;
// }


class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>