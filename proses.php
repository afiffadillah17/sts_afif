<?php
require_once("database.php");
$kodeBrg=$_POST['kodeBrg'];
$namaBrg=$_POST['namaBrg'];
$kategori=$_POST['kategori'];
$merk=$_POST['merk'];
$jumlah=$_POST['jumlah'];
$simpan= inputdata("INSERT INTO barang VALUES(NULL,'$kodeBrg','$namaBrg','$kategori','$merk','$jumlah')");
if ($simpan>0){
    header("location:list_barang.php");
}
?>