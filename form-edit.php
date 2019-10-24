<?php
require 'config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM data_barang WHERE id=$id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Data Barang</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
    table {
        width : 50%;
        margin : auto;
        font-size : 25px;
    }
    .input {
        border : 1px solid black;
        border-radius : 15px;
    }
    td.button {
        text-align : center;
    }
    .btn {
        color : white;
        border : 0px solid black;
        border-radius : 15px;
        background-color : green;
    }
    </style>
</head>
<body>
<br>
<br>
<br>
    <form action="proses-edit.php" method="post">
        <table  cellpadding=5>
            <tr>
                <td colspan=2><h3>Update Data Barang</h3></td>
            </tr>
            <tr>
                <td><label for="kode">Kode :</label></td>
                <td><input class="input col-sm-9" type="text" name="kode" id="kode" value="<?= $row['kode']?>"></td>
            </tr>
            <tr>
                <td><label for="nama">Nama :</label></td>
                <td><input class="input col-sm-12" type="text" name="nama" id="nama" value="<?= $row['nama']?>"></td>
            </tr>
            <tr>
                <td><label for="deskripsi">Deskripsi :</label></td>
                <td><textarea class="input col-sm-12" name="deskripsi" id="deskripsi" cols="30" rows="5" id="deskripsi"><?= $row['deskripsi']?></textarea></td>
            </tr>
            <tr>
                <td><label for="stok">Stok :</label></td>
                <td><input class="input col-sm-6" type="text" name="stok" id="stok" value="<?= $row['stok']?>"></td>
            </tr>
            <tr>
                <td><label for="harga">Harga :</label></td>
                <td><input class="input col-sm-8" type="text" name="harga" id="harga" value="<?= $row['harga']?>"></td>
            </tr>
            <tr>
                <td><label for="berat">Berat :</label></td>
                <td><input class="input col-sm-4" type="text" name="berat" id="berat" value="<?= $row['berat']?>"> gram</td>
            </tr>
            <tr>
            <table cellpadding=10>
                <td colspan=2 class="button"><button class="btn btn-md col-md-3" type="submit" name="simpan">Simpan</button></td>
            </tr>
            </table>
        </table>
    </form>
</body>
</html>