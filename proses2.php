<?php
require_once("database.php");
$tglPinjam=$_POST['tgl_pinjam'];
$tglKembali=$_POST['tgl_kembali'];
$no_identitas=$_POST['no_identitas'];
$kodeBrg=$_POST['kode_brg'];
$jumlah= (integer) $_POST['jumlah'];
var_dump($tglKembali);
var_dump($tglPinjam);
var_dump($no_identitas);
var_dump($kodeBrg);
var_dump($jumlah);
$simpan1= inputdata("INSERT INTO peminjaman VALUES(NULL,'$tglPinjam','$tglKembali','$no_identitas','$jumlah', 'a', 'a', 1);");
if ($simpan1>0){
    header("location:peminjaman.php");
}
?>