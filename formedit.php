<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url(6.1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        h2{
            text-align: center;
            font-style: oblique;
            font-size: 60px;
            shape-margin: 500px;
        }
        .tabel{
            width: 40%;
            margin:0px 400px;
            font-size: 25px;
            
        }
        
</style>
<link rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/css/bootstrap.css">
</head>
<body>
    <?php
    include 'koneksicadangan.php';

    $no = $_GET['no_telp'];

    $query = "select * from bunga where no_telp='$no'";
    $result = $connect->query($query);
    $row = $result->fetch_assoc();
    ?>
    <center>
    <br><br><br>
    <h1 class="text-light">EDIT DATA</h1><br><br>
    <h4>
    <form action="editdata.php" method="post">
        
        <div class="tabel">
        <table width="50%">
            <tr>
                <td>nama bunga</td>
                <td>:</td>
                <td><input type="text" name="nama_bunga" value="<?php echo $row['nama_bunga'];?>"></td>
            </tr>
            <tr>
                <td>warna kertas</td>
                <td>:</td>
                <td><input type="text" name="warna_kertas" value="<?php echo $row['warna_kertas'];?>"></td>
            </tr>
            <tr>
                <td>jumlah</td>
                <td>:</td>
                <td><input type="text" name="jumlah" value="<?php echo $row['jumlah'];?>"></td>
            </tr>
            <tr>
                <td>nomer_telepon</td>
                <td>:</td>
                <td><input type="text" name="no_telp" value="<?php echo $row['no_telp'];?>"></td>
            </tr>
            <tr class="bg-info text-light text-center">
                <td><input type="submit" value="simpan" ></input></td>
            </tr>
            </table>
        </div>
        
    </form>
    </h4>
    </center>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="./assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/js/bootstrap.js"></script>

</body>
</html>