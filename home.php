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
    background-color:rgba(11, 90, 69, 0.178);
  }
</style>
<body>

<div class="jumbotron text-center bg-info">
<h1 class="text-warning">DEVFLOWER</h1>
<p class="text-warning">selamat datang di toko bunga devi cantik</p>
</div>

<nav class="navbar navbar-expand bg-warning navbar-light">
  <a class="navbar-brand" href="#">about me</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-info" href="tablepesanan.php">data pemesan</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link text-info" href="formregister.php">Register</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link text-info" href="formlogin.php">login</a>
      </li>  
    </ul>
  </div>  
</nav>

<h2 class="text-center text-success"><br> SELAMAT DATANG DI DEVFLOWER</h2>
<center><img src="toko.jpg" class="rounded-circle " alt="Cinque Terre" width="300" height="300"></center>
<br>
<div class="text-center">
<h3>pilih salah satu menu dibawah</h3>
<table width=100%>
    <tr>
        <td><br><button class="bg-info btn-lg">
        <span class="spinner-grow spinner-grow-sm bg-light"></span>
        <a class="text-warning" href="formbunga.php">buket</a></button></td>
    </tr>
    <tr>
        <td><br><button class="bg-info btn-lg">
        <span class="spinner-grow spinner-grow-sm bg-light"></span>
        <a class="text-warning" href="formbunga.php">karangan bunga</a></button></td>
    </tr>
</table>
</div>

<div class="container mt-3">
<br><br>
  <h2>kelebihan</h2>
  <p>kami memiliki beberapa kelebihan unggul dari pada toko lainya:</p>
  <div class="media border p-3">
    <img src="1.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:90px;">
    <div class="media-body">
      <h4>penghargaan <small><i>mendapatkan penghargaan nasional</i></small></h4>
      <p>pada tahun 2015 toko kami sudah mendapatkan penghargaan sebagai toko bunga paling estetik diIndonesia.</p>     
    </div> 
  </div>
  <div class="media border p-3">
    <img src="2.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:90px;">
    <div class="media-body">
        <h4>request<small><i>banyak penawaran model dan request</i></small></h4>
        <p>toko kami memiliki banyak sekali pew]nawaran model bunga dan tentunya anda bisa request</p>
      </div>
  </div>
  <div class="media p-3">
      <img src="3.jpg" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:90px;">
      <div class="media-body">
        <h4>karangan bunga<small><i>mengesankan</i></small></h4>
        <p>sudah terbukti dengan banyaknya testimoni tentang karangan bunga milik kami yang tak kalah menarik</p>
      </div>
</div>

<div class="text-center " >
  <br>
    <h6>source photo from PINTEREST</h6>
  <br>
  <h5>Kebijakan Privasi  |   Syarat dan Ketentuan  |   hak cipta dilindungi undang-undang</h3>
  <h7>Copyright © 2008-2020 Devflower.com. All rights reserved</h7>
  <br>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="./assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/js/bootstrap.js"></script>

</body>
</html>