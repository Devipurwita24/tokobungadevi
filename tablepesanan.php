<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/css/bootstrap.css">
    <style>
        body{
            background-image: url(15.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body align="center">
    <center><h1 class="text-light">Data pemesanan</h1><br><br><br><br>
    <table width ="70%" border="3" class="text-center bg-info">
    <tr>
        <th>nama bunga</th>
        <th>warna kertas</th>
        <th>jumlah</th>
        <th>no_telp</th>
        <th colspan="4">aksi</th>
    </tr>
    
    <?php

    include './koneksi.php';
    $query = "select * from bunga ";
    $sql = mysqli_query($connect,$query);
    while($data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$data['nama_bunga']."</td>";
        echo "<td>".$data['warna_kertas']."</td>";
        echo "<td>".$data['jumlah']."</td>";
        echo "<td>".$data['no_telp']."</td>";
        echo "<td><a href='formedit.php?no_telp=".$data['no_telp']."'><button>edit</button></a></td>";
        echo "<td><a href='deletedata.php?no_telp=".$data['no_telp']."'onclick='return confirm
            (\"apakah anda yakin ingin menghapus data?\")'><button>hapus</button></a></td>";
        echo "<td><a href='aksistok.php?tambah=".$data['no_telp']."'><button>tambah</button></a></td>";
        echo "<td><a href='aksistok.php?kurang=".$data['no_telp']."'><button>kurang</button></a></td>";
        echo "</tr>";
    }
    ?>
    </table>
    </center>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="./assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/js/bootstrap.js"></script>
</body>
</html>