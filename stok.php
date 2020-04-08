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

    $query = "select * from stok ";
    $result = $connect->query($query);
    $row = $result->fetch_assoc();
    ?>
    <center>
    <br><br><br>
    <h1 class="text-light">DATA STOK</h1><br><br>
    <h4>
    <form action="home.php" method="post">
        
        <div class="tabel">
        <table width="50%">
            <tr>
                <th>bunga</th>
                <td><input type="text" name="bunga" value="<?php echo $row['bunga'];?>"></td>
            </tr>
            <tr>
                <th>kertas</th>
                <td><input type="text" name="kertas" value="<?php echo $row['kertas_bunga'];?>"></td>
            </tr>
            <tr class="bg-info text-light text-center">
                <td><input type="submit" value="kembali ke home" ></input></td>
            </tr>
            </table>
        </div>
        
    </form>
    </h4>
    <div class="row">
            <div class="card-center">
                <div class="card bg-dark" style="width: 20rem;">
                <div class="card-body text-white">
                    <h5 class="card-title">Jumlah Siswa</h5>
                    <p class="card-text" style="font-size:60px">41</p>
                    <a href="#" class="text-blue">Lebih detail >></a>
                </div>
            </div>
    </center>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="./assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/js/bootstrap.js"></script>

</body>
</html>