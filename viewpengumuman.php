<?php
session_start();
if(!isset($_SESSION['masuk'])){
  header("location: login.php");
  exit;
}
require ('function.php');
$pengumuman = query("SELECT * FROM home");

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="layout.css" type="text/css">
  <title>DIKLAT STTA</title>
  <link rel="icon" href="profilmenwa.jpeg">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
  <style>
   
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
            <a href="index.php">Home</a>
            <a href="materi.php">Materi</a>
            <a href="admin.php">Absen</a>
            <a href="profil.php">Profil Pelatih</a>
        </div>
        <div class="marque" style="border: 1px solid none; height: 50px;">
            <marquee behavior="" direction=""><h1 style="font-size:20px;">Form View Pengumuman !!</h1></marquee>
        </div>

        <h1>View Pengumuman</h1>
            <form action="admin.php">
                <button type="submit">Kembali</button>
            </form>

        <table border="1" cellpadding="10" cellspacing="0" style="margin-top:30px; text-align:center;">
            <tr>
                <th>No.</th>
                <th style="width:150px;">aksi</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Pengumuman</th>
                <th>Gambar</th>
                <th>Judul Link</th>
                <th>Link</th>
            </tr>  
            <tr>
                <?php $i=1; ?>
               <?php foreach($pengumuman as $data): ?>
                <td><?= $i?></td>
                <td>
                    <a href="ubah1.php?id=<?= $data['id']; ?>">ubah</a> |
                    <a href="delete1.php?id=<?= $data['id']; ?>">hapus</a>
                </td>
                <td><img src="img/<?= $data['gambar'];?>" width="90px"></td>
                <td><?= $data['judul'];?></td>
                <td><?= $data['pengumuman'];?></td>
                <td><?= $data['gambar'];?></td>
                <td><?= $data['judullink']; ?></td>
                <td><?= $data['link']; ?></td>
            </tr>
                <?php $i++; ?>
               <?php endforeach;?>
            
        </table>

        <div class="footer" style="font-family: 'Lobster', cursive;">
        <h2>DIKLAT<br> MENWA MANGGALA DIRGANTARA <br> SEKOLAH TINGGI TEKNOLOGI ADISUTJIPTO</h2>
        </div>
</body>
</html>