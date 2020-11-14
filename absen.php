<?php
require 'function.php';
$date = date('j-M-Y | H:i:s');

if(isset($_POST['absen'])){
    if(absen($_POST)>0){
        $benar = true;
    }else{
        $salah = true;
    }
    
}


?>




<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="layout2.css" type="text/css">
  <title>Absen</title>
  <link rel="icon" href="profilmenwa.jpeg">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <style>
    /* Absen*/
    body{
        background: #f1f1f1;
    }
    .topnav a{
    text-decoration: none;
    }
    .absen{
        border: 3px solid blue;
    }
    ul li{
        margin-bottom:5px;
    }
    button{
        margin-left:50px;
        margin-bottom:20px;
    }

    @media(min-width:600px){
        .absen{
            margin-left: 35%;
            width:30%;
        }
        button{
            margin-left:26%;
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
  <a href="#">Absen</a>
  <a href="profil.php">Profil Pelatih</a>
</div>
<div class="marque" style="border: 1px solid none; height: 50px;">
  <marquee behavior="" direction=""><h1 style="font-size:20px;">Form Absen || Silahkan Absen Disini !!</h1></marquee>
</div>
<?php if(isset($benar)): ?>
<div class="container">
    <div class="alert alert-primary" role="alert">
        Anda Berhasil Absen Hari ini !
    </div>
</div>
<?php endif; ?>

<?php if(isset($salah)): ?>
<div class="container">
    <div class="alert alert-danger" role="alert">
        Anda Tidak Berhasil Absen Hari ini !, Mohon Isi data dengan Benar!
    </div>
</div>
<?php endif;?>


<div class="absen">
    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" value="<?= $date ?>" name="waktu">
        <ul>
            <li>
                <label for="nama">Nama :</label><br>
                <input type="text" id="nama"name="nama"placeholder="Masukkan Nama Anda" required autofocus>
            </li>
            <li>
                <label for="pertemuan">Pertemuan Ke :</label> <br>
                <input name="pertemuan" type="number" id="pertemuan" placeholder="Masukkan Pertemuan" required>
            </li>
            <li>
                <label for="judul">Judul Materi :</label> <br>
                <input type="text" id="judul" name="judul"required placeholder="masukkan judul materi">
            </li>
            <li>
            <label for="tgl">Kehadiran : </label> <br>
                <input type="date" id="tgl" name="tgl"required>
            </li>
            <li>
                <label for="gambar">Masukkan gambar anda disini :</label> <br>
                <input type="file" name="gambar" >
            </li>
        </ul>
        <button type="submit" name="absen" class="btn btn-primary">Absen</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>