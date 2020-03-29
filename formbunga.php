<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/css/bootstrap.css">
    
</head>
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
            background-color: lightpink;
        }
        
</style>
<body>
<center>
<br><br><br><br><br><br>
    <h2 class="text-light">tulis bunga yang akan anda pesan</h2><br><br><br>
    <table class="bg-muted">
    <tr>
        <td><button><img src="3.jpg" width="100" height="120"></button></td>
        <td><button><img src="8.jpg" width="100" height="120"></button></td>
        <td><button><img src="9.jpg" width="100" height="120"></button></td>
        <td><button><img src="10.jpg" width="100" height="120"></button></td>
    </tr>
    </table>
    <br><br><br>
    <h4>
    <form action="aksibunga.php" method="post">
    <div class="tabel">
        <table width="50%" class="text-left" >
            <tr>
                <td>nama bunga</td>
                <td>:</td>
                <td><input type="text" name="nama_bunga" placeholder="nama bunga"></td>
            </tr>
            <tr>
             <br>
                <td>warna kertas</td>
                <td>:</td>
                <td><input type="text" name="warna_kertas" placeholder="warna kertas"></td>
            </tr>
            <tr>
                <div>
                <br>
                <td>jumlah</td>
                <td>:</td>
                <td><input type="text" name="jumlah" placeholder="jumlah"></td>
                </div>
            </tr>
            <tr>
            <div>
                <td>nomer_telepon</td>
                <td>:</td>
                <td><input type="text" name="no_telp" placeholder="no.telp"></td>
            </div>
            </tr>
            <tr  class="text-center ">
                <td><button class="bg-info">simpan</button></td>
            </tr>
        </table>
        </div>
    </form>
    </h4>
<br><br>
    <table>
    <tr>
        <td><button><img src="11.jpg" width="100" height="120"></button></td>
        <td><button><img src="12.jpg" width="100" height="120"></button></td>
        <td><button><img src="13.png" width="100" height="120"></button></td>
        <td><button><img src="14.jpg" width="100" height="120"></button></td>
    </tr>
    </table>
    </center>
    
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="./assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/js/bootstrap.js"></script>

</body>
</html>