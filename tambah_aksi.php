<?php
    include 'koneksi.php';

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];

    mysqli_query($koneksi, "insert into buku values('$id', '$judul', '$penulis' )");
   
    header("location:admin.php");
?>