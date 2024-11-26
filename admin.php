<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body style="">
    <h2 align="center">Selamat Datang Sebagai Admin!</h2>
    <br>
    <br>
    <div align="center">
        <a href="tambah.php">Tambah Data</a>
        <br>
        <br>
        <table border="1" align="center" style="">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Opsi</th>
            </tr>

            <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query( $koneksi,"SELECT * FROM buku");
                while($d = mysqli_fetch_array($data)){
            ?>

            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $d['judul']; ?></td>
                <td><?php echo $d['penulis']; ?></td>
                <td><a href="edit.php?id=<?php echo $d['id']?>">Edit</a>
                <a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a></td>
            </tr>

            <?php
            }
            ?>

        </table>
    </div>
</body>
</html>