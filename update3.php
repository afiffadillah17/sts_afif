<?php
require_once("database.php");
$id = $_POST['id'];
$no_identitas = $_POST['no_identitas'];
$Nama= $_POST['nama'];
$Status = $_POST['status'];
$Username = $_POST['username'];
$Password = $_POST['password'];
$Role = $_POST['role'];
$sql = updateUser("user", $id, $no_identitas, $nama, $status, $username, $password, $role);

if($sql){
    header("location:user.php");
}
?>