<?php
require 'function.php';

$materi = query("SELECT * FROM materi");


?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="layout2.css" type="text/css">
  <title>Materi DIKLAT</title>
  <link rel="icon" href="profilmenwa.jpeg">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
  <style>
    .kolomkiri{
      margin-top:10px;
      background-color:white;
      
    }
    .footer1{
      margin-top:10%;
    }
    /* responsive footer*/
    @media(min-width:600px){
      .kolomkiri{
        margin-top:20px;
        margin-left:10%;
        padding-left:300px;
      }
      .kolomkiri .judul{
        margin-left:30%;
      }
      embed{
        width:90%;
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
  <a href="#">Materi</a>
  <a href="absen.php">Absen</a>
  <a href="profil.php">Profil Pelatih</a>
</div>
<div class="marque" style="border: 1px solid none; height: 50px;">
  <marquee behavior="" direction=""><h1 style="font-size:20px;">Berikut Materi Pendidikan dan Pelatihan Resimen Mahasiswa Manggala Dirgantara STTA || Selamat Belajar!!</h1></marquee>
</div>

<div class="row" style="margin-top:0px;">
  <div class="kolomkiri">
    <div class="kartunama">
      <h1 class="judul" style="margin-top:-20px;">Materi</h1>

      <?php foreach($materi as $data):?>
      <h5>Pertemuan :  <?= $data['pertemuan']; ?></h5>
      <h5>Deskripsi :  <?= $data['deskripsi']; ?></h5>
      <a href="dwonload.php?file=<?= $data['file'];?>">Dwonload Materi</a>

        <div class="file">
           <embed src="img/<?=$data['file'];?>" type="application/pdf" width="400px" height="400px">
        </div>

          <h1>Keterangan :</h1>
          <p><?= $data['keterangan']; ?></p>
          <p></p>
          <?php endforeach;?>
      </div>
    </div>
    </div>
</body>
</html>