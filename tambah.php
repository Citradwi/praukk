<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praukk</title>
</head>
<body>
    <table border = "0">
    <h1>praukk</h1>
    <form action ="proses-tambah.php" method = "POST">
                <form>
                    <fieldset>
                        <p>
    <label for="nama_bahan">nama bahan :</label>
    <input type="text" name="nama_bahan"/>
</p>
<p>
    <label for="satuan">satuan :</label>
    <input type="text" name="satuan"/>
</p>
<p>
    <label for="harga">harga :</label>
    <input type="text" name="harga"/>
</p>
<p>
    <label for="nama_toko">nama toko :</label>
    <input type="text" name="nama_toko"/>
</p>
<p>
    <label for="alamat">alamat :</label>
    <input type="text" name="alamat"/>
</p>
<p>
    <label for="no_siup">no siup : </label>
    <input type="text" name="no_siup"/>
</p>
<p>
    <label for="nama_pemilik">nama pemilik :</label>
    <input type="text" name="nama_pemilik"/>
</p>
<table>
<p>
    <input type="submit" value="kirim data" name="kirim-data"/>
</p>
</table>
</fieldset>
</form>
</body>
</html>