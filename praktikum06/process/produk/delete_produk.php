<?php
require_once "../../database/dbkoperasi.php";
$id = $_GET['iddel'];
$sql = "DELETE FROM produk WHERE id = ?";
$statement = $dbh->prepare($sql);
$statement->execute ([$id]);