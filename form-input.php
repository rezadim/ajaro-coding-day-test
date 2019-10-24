<?php
require 'config.php';

if(isset($_POST["submit"])) {
    $kode       = $_POST["kode"];
    $nama       = $_POST["nama"];
    $deskripsi  = $_POST["deskripsi"];
    $stok       = $_POST["stok"];
    $harga      = $_POST["harga"];
    $berat      = $_POST["berat"];

    $ins = "INSERT INTO data_barang
                VALUES
                ('', '$kode', '$nama', '$deskripsi', '$stok', '$harga', '$berat')
             ";
    mysqli_query($conn, $ins);  
    if( $ins ){
        header ('Location: data-barang.php');
    } else {
        die("gagal menambah...");
    }    
}  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Input Data Barang</title>
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
    .des {
        text-align : right;
    }
    </style>
</head>
<body>
<br>
<br>
<br>
    <form action="" method="post">
        <table cellpadding=5>
            <tr>
                <td colspan=2><h3>Input Data Barang</h3></td>
            </tr>
            <tr>
                <td><label for="kode">Kode :</label></td>
                <td><input type="text" name="kode" id="kode" class="input col-sm-9" required></td>
            </tr>
            <tr>
                <td><label for="nama">Nama :</label></td>
                <td><input type="text" name="nama" id="nama" class="input col-sm-12" required></td>
            </tr>
            <tr>
                <td><label class="des" for="deskripsi" text-align='right-top'>Deskripsi :</label></td>
                <td><textarea name="deskripsi" id="deskripsi" cols="30" rows="5" id="deskripsi" class="input col-sm-12"></textarea></td>
            </tr>
            <tr>
                <td><label for="stok">Stok :</label></td>
                <td><input type="text" name="stok" id="stok" class="input col-sm-6" required></td>
            </tr>
            <tr>
                <td><label for="harga">Harga :</label></td>
                <td><input type="text" name="harga" id="harga" class="input col-sm-8" required></td>
            </tr>
            <tr>
                <td><label for="berat">Berat :</label></td>
                <td><input type="text" name="berat" id="berat" class="input col-sm-4" required> gram</td>
            </tr>
            <table cellpadding=10>
            <tr>
                <td colspan=2 class='button'>
                <button class="btn col-md-3" type="submit" name="submit">Tambah</button></td>
            </tr>
            </table>
        </table>    
    </form>
</body>
</html>