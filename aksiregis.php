<?php
include './koneksi.php';

$user = $_POST['username'];
$pass = $_POST['pass'];

$query = "insert into login (username,pass) VALUES ('$user','$pass')";
$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if($num>0){
    header("location:home.php");
}else{
    echo "gagal register";
}
?>