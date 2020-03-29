<?php
include 'koneksicadangan.php';


$nama = $_POST["nama_bunga"];
$kertas = $_POST["warna_kertas"];
$jumlah = $_POST["jumlah"];
$no = $_POST['no_telp'];

$query = "UPDATE bunga SET nama_bunga='$nama',warna_kertas='$kertas',jumlah='$jumlah',no_telp='$no'
            WHERE no_telp='$no'";
$result = $connect->query($query);
$num = mysqli_affected_rows($connect);

if($num>0){
    header("location:tablepesanan.php");
}else{
    echo "gagal ubah";
}

?>