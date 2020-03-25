<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/css/bootstrap.css">
</head>
<body class="bg-warning">
<br><br><br>
<div class="text-center">
<div >
<form action="aksilogin.php" method="post">
    <table  align="center">
    <h1>LOGIN</h1>
    <img src="4.jpg" class="rounded-circle" alt="Cinque Terre" width="200" height="300">
        <tr>
            <td>username</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="username"></td>
        </tr>
        <tr>
            <td>password</td>
            <td>:</td>
            <td><input type="password" name="pass" placeholder="password"></td>
        </tr>
        <tr>
            <td><input type="submit" name="buat" value="sign in"></td>
        </tr>
    </table>
    </form>
</div>
</div>

<?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "login gagal!usernam atau password salah";
        }else if($_GET['pesan']=="login"){
            echo "anda berhasil login";
        }
    }

    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="./assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/js/bootstrap.js"></script>

</body>
</html>