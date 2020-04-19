<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'koneksicadangan.php';

        $nama = $_POST["nama_bunga"];
        $kertas = $_POST["warna_kertas"];
        $jumlah = $_POST["jumlah"];
        $no = $_POST['no_telp'];

        $query = null;
        if (['total']){
            $query = "UPDATE bunga SET total = jumlah*45000 ";
        }
        
        
        if($query){
            $result = mysqli_query($connect,$query);
            header("location:tablepesanan.php");
        }else{
            echo "gagal" . mysqli_connect_error();
        }
        
    ?>
</body>
</html>