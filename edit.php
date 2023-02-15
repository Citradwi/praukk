<?php
include("koneksi.php");
if(!isset($_GET['id_bahan'])){
    header("location:tampil.php");
}

$id_bahan=$_GET['id_bahan'];
$sql="SELECT * FROM tb_bahan INNER JOIN tb_toko ON tb_bahan.id_bahan=tb_toko.id_bahan
WHERE tb_bahan.id_bahan='$id_bahan'";
$query=mysqli_query($db, $sql);
$row=mysqli_fetch_assoc($query);
?>

<html>
    <head>
</head>
<body>
    <center>
        <h4>EDIT</h4>
        <table border="0">
            <form action ="proses-edit.php" method="POST">
                <input type="hidden" name="id_bahan" value="<?php echo $row['id_bahan']?>" />
<p>
                <label for="nama_bahan">Nama Bahan :</label>
                <input type="text" name="nama_bahan" value="<?php echo $row['nama_bahan']?>"/></td>
</p>
<p>
    <label for="satuan">Satuan :</label>
    <input type="text" name="satuan" value="<?php echo $row['satuan']?>"/></td>
</p>
<p>
    <label for="harga">Harga :</label>
    <input type="text" name="harga" value="<?php echo $row['harga']?>"/></td>
</p>
<p>
    <label for="nama_toko">Nama Toko :</label>
    <input type="text" name="nama_toko" value="<?php echo $row['nama_toko']?>"/></td>
</p>
<p>
    <label for="alamat">Alamat :</label>
    <input type="text" name="alamat" value="<?php echo $row['alamat']?>"/></td>
</p>
<p>
       <label for="no_siup">No Siup :</label>
       <input type="text" name="no_siup" value="<?php echo $row['no_siup']?>"/></td>
</p>
<p>
    <label for="nama_pemilik">Nama Pemilik :</label>
    <input type="text" name="nama_pemilik" value="<?php echo $row['nama_pemilik']?>"/></td>
</p>

<table>
    <p><input type="submit" name="edit" value="edit data"></td>

</form>
</table>
</body>
</html>