<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['pass'];

$data = mysqli_query($connect,"select * from login where username='$username' and pass='$password'");

$cek = mysqli_num_rows($data);

if($cek>0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:home.php");

}else{
    header("location:formlogin.php?pesan=gagal");
}


?>