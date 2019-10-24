<?php
    require 'config.php';
    $result = mysqli_query($conn, "SELECT * FROM data_barang");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
        table tr td.info {
            text-align : left;
        }
        table tr td.tom {
            text-align : right;
        }
        .btn {
        color : white;
        border : 0px solid black;
        border-radius : 15px;
        background-color : green;
    }
        table {
            width : 70%;
            margin : auto;
            font-size : 20px;
            text-align : center;
        }
        a.edit {
            color : blue;
            text-decoration : none;
        }
        a.hapus {
            color : red;
            text-decoration : none;
        }
    </style>
</head>
<body>
<br>
<br>
<br>
<table cellpadding=10>
    <tr>
        <td class="info"><h3>Data Barang</h3></td>
        <td class="tom"><a href="form-input.php" class="btn btn-md col-md-7">Tambah</a></td>
    </tr>
    </table>
    <table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
<?php while($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $row["kode"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td>Rp. <?= $row["harga"]; ?></td>
        <td>
            <a href="form-edit.php?id=<?= $row["id"]; ?>" class="edit">Edit</a>
            &nbsp&nbsp&nbsp
            <a href="hapus.php?id=<?= $row["id"]; ?>" class="hapus">Hapus</a>
        </td>
    </tr>
<?php endwhile; ?>
    </table>
</body>
</html>