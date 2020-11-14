<?php
//session
session_start();
if(!isset($_SESSION['masuk'])){
  header("location: login.php");
  exit;
}

//menggunakan DB lanjut besok
//semoga bisa aminn

?>



<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="layout.css" type="text/css">
  <title>DIKLAT STTA</title>
  <link rel="icon" href="profilmenwa.jpeg">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
  <style>
      .input,.view,.admin{
          margin-left:30px;
      }
      .input{
          border:3px solid blue;
          margin-bottom:10px;
          width:350px;
          
      }
      .view{
        border:3px solid blue;
        margin-bottom:10px;
        width:350px;
      }
      .admin{
        border:3px solid blue;
        width:350px;
      }
    @media(min-width:600px){
      .footer{
        width:100%;
        margin-top:20px;
      }
      .view,.admin{
          margin-left:33%;
          margin-top:-160px
      }
      .admin{
        margin-left:64%;
        margin-top:-190px;
      }
    }
  </style>
</head>
<body>

<div class="header">
  <h1 >Diklat MENWA <br>STTA</h1>
 
</div>
<img src="profilmenwa.jpeg" id="profil">

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="materi.php">Materi</a>
  <a href="">Absen</a>
  <a href="profil.php">Profil Pelatih</a>
</div>
<div class="marque" style="border: 1px solid none; height: 50px;">
  <marquee behavior="" direction=""><h1 style="font-size:20px;">Selamat Datang Adminku !! || Aku senang bisa dikendalikanmu || SEMOGA HARI-HARIMU MENYENANGKAN ||Sarangheooo</h1></marquee>
</div>
<div class="input">
    <h1>Form Input</h1>
    <ul>
        <li><a href="inputpengumuman.php"><h2>Input Pengumuman</h2></a></li>
        <li><a href="inputmateri.php"><h2>Input Materi</h2></a></li>
        <li><a href="inputberita.php"><h2>Input Berita</h2></a></li>
    </ul>
</div>
<div class="view">
    <h1>Form View</h1>
    <ul>
        <li><a href="viewabsen.php"><h2>View Absen</h2></a></li>
        <li><a href="viewpengumuman.php"><h2>View Pengumuman</h2></a></li>
        <li><a href="viewmateri.php"><h2>View Materi</h2></a></li>
        <li><a href="viewberita.php"><h2>View Berita</h2></a></li>
    </ul>
</div>
<div class="admin">
    <h1>ADMIN</h1>
    <ul>
    <li><a href="registrasi.php"><h2>Registrasi</h2></a></li>
        <li><a href="login.php"><h2>Login</h2></a></li>
        <li><a href="logout.php"><h2>Logout</h2></a></li>
    </ul>
</div>





    <div class="footer" style="font-family: 'Lobster', cursive;">
         <h2>DIKLAT<br> MENWA MANGGALA DIRGANTARA <br> SEKOLAH TINGGI TEKNOLOGI ADISUTJIPTO</h2>
    </div>
</body>
</html>