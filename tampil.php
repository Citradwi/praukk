<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praukk</title>
</head>
<body>
    <h3><a href="tambah.php">tambah</a></h3>
    <table border="1">
        <tr>
            <td>No</td>
            <td>nama bahan</td>
            <td>satuan</td>
            <td>harga</td>
            <td>nama toko</td>
            <td>alamat</td>
            <td>no siup</td>
            <td>nama pemilik</td>
            <td>aksi</td>
</tr>
<?php
include("koneksi.php");
$query = mysqli_query($db, "SELECT * FROM tb_bahan INNER JOIN tb_toko ON tb_bahan.id_bahan = tb_toko.id_toko");
$no = 1;
foreach ($query as $row):
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $row['nama_bahan']; ?></td>
    <td><?= $row['satuan']; ?></td>
    <td><?= $row['harga']; ?></td>
    <td><?= $row['nama_toko']; ?></td>
    <td><?= $row['alamat']; ?></td>
    <td><?= $row['no_siup']; ?></td>
    <td><?= $row['nama_pemilik']; ?></td>
    <td>
        <a href="edit.php?id_bahan=<?php echo $row['id_bahan']; ?>">EDIT||</a>
        <a href="hapus.php?id_bahan=<?php echo $row['id_bahan']; ?>">HAPUS||</a>
</td>
</tr>
<?php endforeach ?>
</table>
</body>
</html>