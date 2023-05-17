<?php
//membuat array assosiatif
$profileArray = [
    "nama" => "Abiyyu Cakra",
    "kelas" => "TI04"
];

print_r($profileArray);

$profileMultiArray = [
    [
        'nama' => 'Siti',
        'kelas' => 'XTKJ2'
    ], [
        'nama' => 'Sri',
        'kelas' => 'XITKR3'
    ], [
        'nama' => 'Ahmad',
        'kelas' => 'XIRPL3'
    ]
];

foreach($profileMultiArray as $profile) {
    echo $profile['nama'] . "<br>";
 }