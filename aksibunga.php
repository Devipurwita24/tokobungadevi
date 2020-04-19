<?php
include './koneksicadangan.php';

$nama = $_POST["nama_bunga"];
$kertas = $_POST["warna_kertas"];
$jumlah = $_POST["jumlah"];
$no = $_POST['no_telp'];


$query = "insert into bunga (nama_bunga,warna_kertas,jumlah,no_telp) VALUES ('$nama','$kertas','$jumlah','$no')";
$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if($num>0){
    header("location:aksitotal.php");
}else{
    echo "gagal memesan bunga";
}
?>
