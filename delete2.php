<?php
    require_once("database.php");
    $id = $_GET['id'];
    $sql = DELETE("peminjaman", $id);
    if ($sql) {
        header("location:peminjaman.php");
    }else
    {
        echo"Hapus Gagal";
    }
?>