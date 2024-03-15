<?php
require_once("database.php");
$no_identitas = $_POST['no_identitas'];
$Nama= $_POST['nama'];
$Status = $_POST['status'];
$Username = $_POST['username'];
$Password = $_POST['password'];
$Role = $_POST['role'];

$sql = inputdata("INSERT INTO user VAlUES(null, '$no_identitas', '$Nama', '$Status', '$Username', '$Password', '$Role');");

if($sql){
    header("location:user.php");
}
?>