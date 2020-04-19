<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include './koneksicadangan.php';

    $nama = $_POST["nama_bunga"];
    $kertas = $_POST["warna_kertas"];
    $jumlah = $_POST["jumlah"];
    $no = $_POST['no_telp'];
    
    $query = "select* from bunga";
    $sql = mysqli_query($connect,$query);
    while($data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$data['nama_bunga']."</td>";
        echo "<td>".$data['warna_kertas']."</td>";
        echo "<td>".$data['jumlah']."</td>";
        echo "<td>".$data['no_telp']."</td>";
        echo "<td>".$data['total']."</td>";
        echo "</tr>";
    }
?>
</body>
</html>