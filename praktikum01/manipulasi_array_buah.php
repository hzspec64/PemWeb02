<?php
$arrayBuah = ["Mangga","Jeruk","Melon","Apel","Sirsak"];

// mengurutkan value dari array
sort($arrayBuah);

// menghapus value array yang paling terakhir
array_pop($arrayBuah);

// menghapus spesifik value pada array
unset($arrayBuah[3]);

// menambahkan value array di paling belakang
array_push($arrayBuah,"Durian");

// menghapus value array yang paling depan
array_shift($arrayBuah);

// menambahkan value array di paling depan
array_unshift($arrayBuah,"Buah Naga");

//mengubah value array tertentu
$array[2] = "Pisang";

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}