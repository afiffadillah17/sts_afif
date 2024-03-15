<?php
    require_once("database.php");
    $id = $_GET['id'];
    $sql = DELETE("user", $id);
    if ($sql) {
        header("location:user.php");
    }else
    {
        echo"Hapus Gagal";
    }
?>