<?php
//tangkap data dari materi.php
$file = $_GET['file'];

if(!empty($file)){
    $filename = basename($file);
    $filepath = 'img/'.$filename;
    if(!empty($filename) && file_exists($filepath)){

        //redirect headers
        header("Cache-Control: public");
        header("Content-Description: File Transfer");//
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/pdf");//
        header("Content-Transfer-Emcoding:binary");

        readfile($filepath);
        exit;
    }
    else{
        echo "<script>alert('File Tidak Tersedia');</script>";
    }

}



?>