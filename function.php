<?php
//connect db
$db = mysqli_connect('localhost','nofrisdan','N03D0600','diklat');

//function Query
function query($query){
    global $db; 
    $result = mysqli_query($db,$query); //lemari database
    $rows = []; //penampungan data di dalam array
    while($row = mysqli_fetch_assoc($result)){  //mengambil data jenis string
        $rows[] = $row; //menambahkan elemen baru dari $rows ke $row (sama seperti materi array FOREACH())

    }
    return $rows; //mengembalikan nilai dari $rows[]

}

//function Absen
//input data ke dalam database Absen
function absen($data){
    global $db;
    $nama = htmlspecialchars($data["nama"]);
    $pertemuan = htmlspecialchars($data["pertemuan"]);
    $judul = htmlspecialchars($data["judul"]);
    $tgl = htmlspecialchars($data["tgl"]);
    $waktu = htmlspecialchars($data["waktu"]);

    //upload gambar
    $gambar = upload();
    if(!$gambar ){
        return false;
    }
    $query = "INSERT INTO absen VALUES(null,'$nama','$pertemuan','$judul','$tgl','$gambar','$waktu')";
    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}
//function upload
function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];//directory penyimpanan gambar

    //cek apakah ada gambar yang di upload
    if( $error === 4){
        echo "<script>alert('Pilih gambar terlebih dahulu')</script>";
        return false;
    }

    //cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ["jpg","jpeg","png","pdf"]; //pastikan ekstensi gambar ditentukan karna jikalau tidak ditentukan maka sangat bahaya jikalau user mengupload sebuah script
    $ekstensi = explode('.',$namaFile); // memecah string menjadi array cth : nofrisdan.jpg -> ["nofrisdan","jpg"]
    $ekstensiGambar = strtolower(end($ekstensi));

    //CEK APAKAH FILE YANG DI UPLOAD SESUAI DENGAN YANG DITENTUKAN
    if( !in_array($ekstensiGambar,$ekstensiGambarValid)){ //in_array mencari data string di dalam array
        echo "<script>alert('File yang Anda Upload Tidak sesuai')</script>";
        return false;
    }

    //cek jika gambar yang diupload ukurannya terlalu besar
    if($ukuranFile > 1000000){ //20 000 000 = 20mb
        echo "<script>alert('Ukuran File anda terlalu besar')</script>";
        return false;

    }

    //jika gambar sudah sesuai maka, siap untuk di upload

    //jika nama file sama pastikan file yang lain tidak berubah
    //generate nama baru file

    $namaFilebaru = uniqid();//uniqid() salah satu function php yang berfungsi untuk mengubah string menjadi beberapa kumpulan angka random
    $namaFilebaru .= '.';
    $namaFilebaru .=$ekstensiGambar;


    move_uploaded_file($tmpName,'img/'.$namaFilebaru); //menyimpan data kedalam folder /var/www/html/database/img/ dengan nama file $namaFile
    
    return $namaFilebaru; //return berfungsi untuk mengambalikan $namaFile ke function upload yang dimana upload = $gambar yang nantinya akan di masukkan ke dalam database dengan nama file    
}

//function input pengumuman
//input data ke dalam database Absen
function pengumuman($data){
    global $db;
    $judultgl = htmlspecialchars($data["judul"]);
    $pengumuman = htmlspecialchars($data["pengumuman"]);
    $judullink = htmlspecialchars($data["judullink"]);
    $link = htmlspecialchars($data["link"]);

    //upload gambar
    $gambar = upload();
    if(!$gambar ){
        return false;
    }
    $query = "INSERT INTO home VALUES(null,'$judultgl','$pengumuman','$gambar','$judullink','$link')";
    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}
//input berita
//input data ke dalam database Absen
function berita($data){
    global $db;
    $judulberita = htmlspecialchars($data["judulberita"]);
    $isiberita = htmlspecialchars($data["isiberita"]);
    $judullink = htmlspecialchars($data["judullink"]);
    $link = htmlspecialchars($data["link"]);
  

    //upload gambar
    $gambar = upload();
    if(!$gambar ){
        return false;
    }//sampai sini tidak masalah
    $query = "INSERT INTO berita VALUES(null,'$judulberita','$isiberita','$judullink','$link','$gambar')";
    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}
//function Input Materi
//input data ke dalam database Absen
function materi($data){
    global $db;
    $pertemuan = htmlspecialchars($data["pertemuan"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
   

    //upload gambar
    $gambar = upload();
    if(!$gambar ){
        return false;
    }
    $query = "INSERT INTO materi VALUES(null,'$pertemuan','$deskripsi','$keterangan','$gambar')";
    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}

//function resgistrasi
function daftar($data){
    global $db;
    $username = strtolower(stripslashes($_POST['nama']));
    $password = mysqli_real_escape_string($db,$data['password']);
    $password2 = mysqli_real_escape_string($db,$data['password2']);

    //cek username sudah ada atau belum
    //jika username sudah ada maka daftar gagal / dtiolak
    $result = mysqli_query($db, "SELECT username FROM admin WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<div class='container' ><div class='alert alert-danger' role='alert'>
        Username Sudah tersedia, Gunakan username baru!</div></div>";
        return false;
    }


    //cek konfirmasi password
    if($password !== $password2){
        echo "<div class='container' ><div class='alert alert-danger' role='alert'>
        Konfirmasi Password tidak sesuai !</div></div>";
        return false;
    }
    //enkripsi password
     $password = password_hash($password , PASSWORD_DEFAULT);
    //tambahkan userbaru ke database
    mysqli_query($db,"INSERT INTO admin VALUES(null,'$username','$password')");

    return mysqli_affected_rows($db);
}

//function delete Absen
function hapus($id){
    global $db;
    mysqli_query($db,"DELETE FROM absen WHERE id=$id");

    return mysqli_affected_rows($db);
}
//function delete pengumuman
function hapus1($id){
    global $db;
    mysqli_query($db,"DELETE FROM home WHERE id=$id");

    return mysqli_affected_rows($db);
}

//function delete materi
function hapus2($id){
    global $db;
    mysqli_query($db,"DELETE FROM materi WHERE id=$id");

    return mysqli_affected_rows($db);
}

//function ubah data materi
function ubah($data){
    global $db;
    $id = $data["id"];
    $judultgl = htmlspecialchars($data["judul"]);
    $pengumuman = htmlspecialchars($data["pengumuman"]);
    $judullink = htmlspecialchars($data["judullink"]);
    $link = htmlspecialchars($data["link"]);
    $gambarlama = htmlspecialchars($data["gambarlama"]);
    //$gambar = update();//function update
    
    //cek apakah user memilih gambar baru atau tidak
    if($_FILES['gambar']['error']=== 4){
        $gambar = $gambarlama;
    }else{
        $gambar = update();
    }
    $query = "UPDATE home SET 
                judul = '$judultgl',
                pengumuman = '$pengumuman',
                gambar = '$gambar',
                judullink = '$judullink',
                link = '$link'
                WHERE id = $id
                ";
    mysqli_query($db,$query);   

    return mysqli_affected_rows($db);
}
//function ubah data berita
function ubah1($data){
    global $db;
    $id = $data["id"];
    $judulberita = htmlspecialchars($data["judulberita"]);
    $isiberita = htmlspecialchars($data["isiberita"]);
    $judullink = htmlspecialchars($data["judullink"]);
    $link = htmlspecialchars($data["link"]);
    $gambarlama = htmlspecialchars($data["gambarlama"]);
    
    //cek apakah user memilih gambar baru atau tidak
    if($_FILES['gambar']['error']=== 4){
        $gambar = $gambarlama;
    }else{
        $gambar = update();
    }
    $query = "UPDATE berita SET 
                judul = '$judulberita',
                isiberita = '$isiberita',
                judullink = '$judullink',
                link = '$link',
                gambar= '$gambar'
                WHERE id = $id
                ";
    mysqli_query($db,$query);   

    return mysqli_affected_rows($db);
}
//function ubah data materi
function ubah3($data){
    global $db;
    $id = $data["id"];
    $pertemuan = htmlspecialchars($data["pertemuan"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    $gambarlama = htmlspecialchars($data["gambarlama"]);
    
    //cek apakah user memilih gambar baru atau tidak
    if($_FILES['gambar']['error']=== 4){
        $gambar = $gambarlama;
    }else{
        $gambar = update1();
    }
    $query = "UPDATE materi SET 
                pertemuan = '$pertemuan',
                deskripsi = '$deskripsi',
                keterangan = '$keterangan',
                file = '$gambar'
                WHERE id = $id
                ";
    mysqli_query($db,$query);   

    return mysqli_affected_rows($db);
}




//function update
function update(){
    //array associative
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah ada gambar yang di upload
    if($error === 4){
        echo "<script>alert('Pilih Gambar Terlebih dahulu !')</script>";
        return false;
    }
    //cek apakah file yang diupload sesuai dengan yang di inginkan
    $ekstensiGambarValid = ["jpg","jpeg","png","pdf"]; //pastikan ekstensi gambar ditentukan karna jikalau tidak ditentukan maka sangat bahaya jikalau user mengupload sebuah script
    $ekstensi = explode('.',$namaFile); // memecah string menjadi array cth : nofrisdan.jpg -> ["nofrisdan","jpg"]
    $ekstensiGambar = strtolower(end($ekstensi));

    if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
        echo "<script>alert('File yang Anda Upload Tidak sesuai')</script>";
        return false;
    }

    //cek apakah ukuran file sudah sesuai
    if($ukuranFile > 1000000){ //max 1mb
        echo "<script>alert('Ukuran File anda terlalu besar')</script>";
        return false;
    }
    //jika gambar sudah sesuai maka pindahkan data input ke folder /var/www/html/database/img/

    //jika nama file sama pastikan file yang lain tidak berubah
    //generate nama baru file

    $namaFilebaru = uniqid();//uniqid() salah satu function php yang berfungsi untuk mengubah string menjadi beberapa kumpulan angka random
    $namaFilebaru .= '.';
    $namaFilebaru .=$ekstensiGambar;

    move_uploaded_file($tmpName,'img/'.$namaFilebaru);
    return $namaFilebaru;


}
function update1(){
    //array associative
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah ada gambar yang di upload
    if($error === 4){
        echo "<script>alert('Pilih Gambar Terlebih dahulu !')</script>";
        return false;
    }
    //cek apakah file yang diupload sesuai dengan yang di inginkan
    $ekstensiGambarValid = ["jpg","jpeg","png","pdf"]; //pastikan ekstensi gambar ditentukan karna jikalau tidak ditentukan maka sangat bahaya jikalau user mengupload sebuah script
    $ekstensi = explode('.',$namaFile); // memecah string menjadi array cth : nofrisdan.jpg -> ["nofrisdan","jpg"]
    $ekstensiGambar = strtolower(end($ekstensi));

    if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
        echo "<script>alert('File yang Anda Upload Tidak sesuai')</script>";
        return false;
    }

    //cek apakah ukuran file sudah sesuai
    if($ukuranFile > 10000000){ //max 20mb
        echo "<script>alert('Ukuran File anda terlalu besar')</script>";
        return false;
    }
    //jika gambar sudah sesuai maka pindahkan data input ke folder /var/www/html/database/img/

    //jika nama file sama pastikan file yang lain tidak berubah
    //generate nama baru file

    $namaFilebaru = uniqid();//uniqid() salah satu function php yang berfungsi untuk mengubah string menjadi beberapa kumpulan angka random
    $namaFilebaru .= '.';
    $namaFilebaru .=$ekstensiGambar;

    move_uploaded_file($tmpName,'img/'.$namaFilebaru);
    return $namaFilebaru;


}


//function cari absen
function cari($keyword){
    $query ="SELECT * FROM absen WHERE nama LIKE '%$keyword%' OR pertemuan LIKE '%$keyword%' OR judulmateri LIKE '%$keyword%' OR kehadiran LIKE '%$keyword%'";
    return query($query); //function query diambil dari query yang telah kita buatkan, yang berisi nilai array associative
}





?>