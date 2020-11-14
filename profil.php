<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="profilmenwa.jpeg">
    <link rel="stylesheet" href="layout.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono:ital@1&display=swap" rel="stylesheet"> 
    <title>Profil Pelatih</title>
    <style>
    /* image */
    .profil1 .img:hover{
    -webkit-transform: scale(1.05);
    transform: scale(1.30);

    }
    .profil1 .img{
      float:left;
    }
  
    .profil1 .img1{
      margin-top:-30px;
      margin-left:-10px;
    }
    .profil1 .img2{
      margin-top:-26px;
      margin-left:-20px;

    }
     /* jenis huruf */
     .conten2 h1{
      font-family: 'Xanh Mono', monospace;
     }


     /* image */
    .profil1{
      height:450px;
    }
    @media(min-width:600px){
      .content2{
        margin-top:-450px;
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
  <a href="absen.php">Absen</a>
  <a href="#">Profil Pelatih</a>
</div>
<div class="marque" style="border: 1px solid none; height: 50px;">
  <marquee behavior="" direction=""><h1 style="font-size:20px;">Profil Pelatih Resimen Mahasiswa Manggala Dirgantara </h1></marquee>
</div>

<div class="profil1">
    <img src="img/taufik.png"  width="150px" height="160px">
    <div class="conten2">
    <ul>
        <li><h1>Nama : Taufik Budi Cahyana</h1></li>
        <li><h1>Prodi : Teknik Dirgantara</h1></li>
        <li><h1>Yudha : XLI</h1></li>
        <li><h1>Jabatan :KAUR DIKLAT</h1></li>
        <li><h1>Periode : 2018/2020</h1></li>
    </ul>
           <a class="img"href="https://instagram.com/taufik_12__?igshid=1wf09d7r26anl"><img title="Ikuti Saya Di Instagram" class="img1" src="img/ig3.png" width="100px" height="100px"></a>
          <a class="img"href="#"><img title="Ikuti Saya di FB"class="img2"src="img/fb2.png" width="130px" height="90px" ></a>
    </div>
</div>

<div class="content2">
    <div class="profil1">
        <a href="login.php">
          <img src="profil2.jpeg"  width="150px" height="160px">
        </a>
        <div class="conten2">
        <ul>
            <li><h1>Nama    : NOFRISDAN SITOPU</h1></li>
            <li><h1>Prodi   : Informatika</h1></li>
            <li><h1>Yudha   : XLII</h1></li>
            <li><h1>Jabatan :Staf DIKLAT</h1></li>
            <li><h1>Periode : 2019/2020</h1></li>
            <li>
                <a href="https://instagram.com/nofrisdan?igshid=193ikqoehcbji"><img title="Ikuti Saya di Instagram"class="img img1" src="img/ig3.png" width="100px" height="100px"></a>
                <a href="https://www.facebook.com/jahez021"><img title="Ikuti Saya di FB"class="img img2"src="img/fb2.png" width="130px" height="90px" ></a>
            </li>
        </ul>
        </div>
    </div>
</div>
</body>
</html>