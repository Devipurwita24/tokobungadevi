<?php



include 'koneksicadangan.php';



$query = null;

if (isset($_GET['tambah'])){
    $query = "UPDATE bunga SET jumlah = jumlah+1 WHERE no_telp = ".$_GET['tambah'] . ";";
}
else if (isset($_GET['kurang'])){
    $query = "UPDATE bunga SET jumlah = jumlah-1 WHERE no_telp = ".$_GET['kurang'] . ";";
}

if($query){
    $result = mysqli_query($connect,$query);
}else{
    echo "gagal" . mysqli_connect_error();
}

header("location:aksitotal.php");

?>