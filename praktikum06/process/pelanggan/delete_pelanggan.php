<?php
require_once '../../database/dbkoperasi.php';
$id = $_GET['iddel'];
$sql = "DELETE FROM pelanggan WHERE id = $id";
mysqli_query($dbh, $sql);
// $st = $dbh->prepare($sql);
// $st->execute($id);
header('location:list_pelanggan.php');