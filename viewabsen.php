<?php
session_start();
if(!isset($_SESSION['masuk'])){
  header("location: login.php");
  exit;
}
require ('function.php');
$absen = query("SELECT * FROM absen");
$keyword = $_POST['keyword'];
if(isset($_POST['cari'])){
    $absen = cari($keyword);

}

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="layout.css" type="text/css">
  <title>DIKLAT STTA</title>
  <link rel="icon" href="profilmenwa.jpeg">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    h1{
    font-family: 'Lobster', cursive;
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
            <a href="index.php">Home</a>
            <a href="materi.php">Materi</a>
            <a href="admin.php">Absen</a>
            <a href="profil.php">Profil Pelatih</a>
        </div>
        <div class="marque" style="border: 1px solid none; height: 50px;">
            <marquee behavior="" direction=""><h1 style="font-size:20px;">Berikut Data Kehadiran Peserta|| Widya Castrena Dharma sidha!! || Prajna Vira Dharma Cevana!!</h1></marquee>
        </div>

        <h1>DATA KEHADIRAN</h1>
        <form action="admin.php" method="post">
            <button class="btn btn-primary"type="submit">Kembali</button>
        </form>
            <div class="cari" style="margin-top:30px;">
            <form action="" method="post">
                <input type="text" placeholder="Cari.." name="keyword"value="<?= $keyword ?>" autofocus autocomplete="off">
                <button type="submit" name="cari">cari</button>
            </form>
        </div>

        <table border="1" cellpadding="10" cellspacing="0" style="margin-top:30px; text-align:center;">
            <tr>
                <th>No.</th>
                <th>aksi</th>
                <th>gambar</th>
                <th>Nama</th>
                <th>Pertemuan</th>
                <th>Judul Materi</th>
                <th>Kehadiran</th>
                <th>Waktu Absen</th>
            </tr>  
            <tr>
                <?php $i=1; ?>
               <?php foreach($absen as $data): ?>
                <td><?= $i?></td>
                <td>
                    <a href="">ubah</a> |
                    <a href="delete.php?id=<?= $data['id']; ?>">hapus</a>
                </td>
                <td><img src="img/<?= $data['gambar'];?>" width="90px"></td>
                <td><?= $data['nama'];?></td>
                <td><?= $data['pertemuan'];?></td>
                <td><?= $data['judulmateri'];?></td>
                <td><?= $data['kehadiran']; ?></td>
                <td><?= $data['waktu']; ?></td>

            </tr>
                <?php $i++; ?>
               <?php endforeach;?>
            
        </table>

        <div class="footer" style="font-family: 'Lobster', cursive;">
        <h2>DIKLAT<br> MENWA MANGGALA DIRGANTARA <br> SEKOLAH TINGGI TEKNOLOGI ADISUTJIPTO</h2>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>