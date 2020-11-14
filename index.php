<?php
require 'function.php';

$pengumuman = query("SELECT * FROM home");
$berita = query("SELECT * FROM berita");


?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="layout.css" type="text/css">
  <title>DIKLAT STTA</title>
  <link rel="icon" href="profilmenwa.jpeg">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
  <style>
    /* About Diklat*/
    .gambar .content{
      margin-top:-20px;
      font-size:13px;
      font-style:justify;
    }
    /* */
    .medsos:hover{
    -webkit-transform: scale(1.05);
    transform: scale(1.30);
  }
    /* */
    .kartu{
      height:260px;
    }
  .media a{
    float:left;
  }
  .media .yt{
    margin-left:40px;
    margin-top:-40px;
    width:60px;
    height:60px;
  }
    @media(min-width:600px){
      .footer{
        width:100%;
        margin-top:0px;
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
  <a href="#">Home</a>
  <a href="materi.php">Materi</a>
  <a href="absen.php">Absen</a>
  <a href="profil.php">Profil Pelatih</a>
</div>
<div class="marque" style="border: 1px solid none; height: 50px;">
  <marquee behavior="" direction=""><h1 style="font-size:20px;">Selamat Datang di website Pendidikan dan Pelatihan Resimen Mahasiswa Manggala Dirgantara STTA || Widya Castrena Dharma sidha!! || Prajna Vira Dharma Cevana!!</h1></marquee>
</div>

<div class="row">
  <div class="kolomkiri">
    <div class="kartunama">
      <h1>Pengumuman</h1>
      <?php foreach($pengumuman as $data): ?>
        <h5><?php echo $data['judul'];?></h5>
              <div class="gambar" style="height:200px; width: 345px;">
                  <img src="img/<?php echo $data['gambar'];?>" width="345px" height="200px"style=" margin-left:-20px; margin-top:-20px;">
              </div>
        <h1>Keterangan :</h1>
            <p><?php echo $data["pengumuman"]; ?></p>
            <a href="<?= $data['link'];?>"><?php echo $data['judullink']; ?></a>
      <?php endforeach; ?>
    </div>
    
    <div class="kartunama">
      <h1>Berita </h1>
      <?php foreach($berita as $data): ?>

      <h5>Deskripsi: <?= $data['judul']?></h5>
              <img src="img/<?= $data['gambar']; ?>" width="345px" height="200px">
      <h1>Keterangan :</h1>
          <p><?= $data['isiberita'];?></p>
          <a href="<?= $data['link'];?>"><?php echo $data['judullink']; ?></a>
      <?php endforeach; ?>
    </div>
  </div>
  


  <div class="kolomkanan">
    <div class="kartunama">
      <h2>About Diklat</h2>
        <div class="gambar" style="height:150px; background-color: white;">
        <p class="content">Pendidikan Dan Pelatihan atau biasa disingkat dengan DIKLAT, ialah salah satu unsur 
          staf di Resimen Mahasiswa Manggala Dirgantara STTA,Yang bertugas sebagai pelaksana
          kegiatan Pelatihan dan Pengembangan baik calon Anggota maupun Anggota Aktif di Resimen Mahasiswa 
          Manggala Dirgantara STTA </p>
         </div>
    </div>

    <div class="kartunama">
      <h3>Popular Post</h3>
      <img src="img/<?=$data['gambar']; ?>" width="250px;"height="260px">
    </div>

    <div class="kartunama kartu">
      <h3>Follow Our Account</h3>
      <div class="media">
         <a href="https://instagram.com/menwa_stta?igshid=8jsuytbs9cah"><img class="medsos"title="Follow Ig Menwa STTA" src="img/ig3.png" width="100px" height="100px"></a>
         <a href="https://www.youtube.com/channel/UCB_A-c0GugkWf_eI1Smf0VQ"><img class="medsos yt"title="Subscribe our Youtube chanell" src="youtube.png"width="80px" height="80px" style="border-radius:50%; margin-top:20px;"></a>
      </div>
    </div>
  </div>
</div>

  <div class="footer" style="font-family: 'Lobster', cursive;">
    <h2>DIKLAT<br> MENWA MANGGALA DIRGANTARA <br> SEKOLAH TINGGI TEKNOLOGI ADISUTJIPTO</h2>
  </div>
  </body>
  </html>