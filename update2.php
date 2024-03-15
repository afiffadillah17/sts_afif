<?php
require_once("database.php");
$id = $_POST['id'];
$tglPinjam = $_POST['tgl_pinjam'];
$tglKembali= $_POST['tgl_kembali'];
$no_identitas = $_POST['no_identitas'];
$kodeBrg= $_POST['kode_brg'];
$jumlah = $_POST['jumlah'];
$sql = updatePeminjaman("peminjaman", $id, $tglPinjam, $tglKembali, $no_identitas, $kodeBrg, $jumlah);

if($sql){
    header("location:peminjaman.php");
}
?>