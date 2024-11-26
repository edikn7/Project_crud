<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H2>TAMBAH DATA BUKU</H2>
    <a href="admin.php">Kembali</a>
    <form method="POST" action="tambah_aksi.php">
        <table>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="penulis"></td>
            </tr>
            <tr>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>