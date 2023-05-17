<?php
// 会社員 (kaishain) = karyawan
$kaishain1 = ['id'=>1,'nama'=>'Murayama','usia'=>22,'lama bekerja'=>3,'penghargaan'=>6];
$kaishain2 = ['id'=>2,'nama'=>'Todoroki','usia'=>18,'lama bekerja'=>2,'penghargaan'=>4];
$kaishain3 = ['id'=>3,'nama'=>'Fujio','usia'=>25,'lama bekerja'=>4,'penghargaan'=>11];
$kaishain4 = ['id'=>4,'nama'=>'Tsukasa','usia'=>17,'lama bekerja'=>2,'penghargaan'=>9];

$ar_nilai = [$kaishain1, $kaishain2 , $kaishain3, $kaishain4];
?>
<h3 style="text-align: center">List Data Karyawan PT. Ufomeja</h3>
<table border="1" width="100%">
 <thead>
  <tr color="red">
    <th>No</th><th>Nama</th><th>Usia</th>
    <th>Lama Bekerja</th><th>Penghargaan</th><th>Nilai Akumulasi Karyawan</th>
  </tr>
 </thead>
 <tbody>
   <?php
    $nomor = 1;
    foreach($ar_nilai as $kaishain){
     echo '<tr><td>'.$nomor.'</td>';
     echo '<td>'.$kaishain['nama'].'</td>';
     echo '<td>'.$kaishain['usia'].'</td>';
     echo '<td>'.$kaishain['lama bekerja'].'</td>';
     echo '<td>'.$kaishain['penghargaan'].'</td>';
     $nilai_akhir = ($kaishain['usia'] + $kaishain['lama bekerja']+$kaishain['penghargaan'])/3;
     echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
     echo '<tr/>';
     $nomor++;
    }
   ?>
</tbody>
</table>

<img width="1337px" height="456px" src= "https://www.datawrapper.de/wp-content/uploads/2021/02/2102_website_finance55.gif" />