<?php
    include 'koneksi.php';

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];

    mysqli_query($koneksi,"UPDATE buku SET judul='$judul', penulis='$penulis' WHERE id='$id'");

    header("location:admin.php");
?>