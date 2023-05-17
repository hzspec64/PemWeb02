<?php

function hitungUmur($tahunLahir){
    $tahun_sekarang = 2023;
    echo $tahun_sekarang - $tahunLahir;
}

hitungUmur(2001);
echo "<br>";
hitungUmur(2003);
echo "<br>";
hitungUmur(2005);
echo "<br>";
hitungUmur(2007);
echo "<br>";

function welcome($nama)
{
    echo "Konnichiwa, youkoso $nama-san !";
}

welcome("HZ SPEC");
echo "<br>";
welcome("Hamzah");

?>