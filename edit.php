<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit data buku</h2>
    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data =mysqli_query($koneksi,"SELECT * FROM buku WHERE id='$id' ");
        while($d = mysqli_fetch_array( $data)){
    ?>
        <form method="POST" action="aksi_update.php">
            <table>
                <tr>
                    <td>Judul buku</td>
                    <td><input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="judul" value="<?php echo $d['judul']; ?> ">
                    </td>
                </tr>
                <tr>
                    <td>Penulis</td>
                    <td><input type="text" name="penulis" value="<?php echo $d['penulis']; ?> "></td>
                </tr>
                <tr>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>
</html>