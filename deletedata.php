<?php
include './koneksicadangan.php';

$no = $_GET['no_telp'];

$query = "DELETE FROM bunga WHERE no_telp='$no'";

$result=$connect->query($query);
$num = mysqli_affected_rows($connect);

if($num>0){
    header("location:tablepesanan.php");
}else{
    echo "gagal menambah data";
}

?>