<?php
require 'config.php';


$id = $_GET['id'];

// $query = mysql_query($conn, "SELECT * FROM data_barang WHERE id='$id'")

if(isset( $_POST['simpan'] ) ) {
        
        $kode      = $_POST["kode"];
        $nama      = $_POST["nama"];
        $deskripsi = $_POST["deskripsi"];
        $stok      = $_POST["stok"];
        $harga     = $_POST["harga"];
        $berat     = $_POST["berat"];
        
$sql = "UPDATE data_barang SET kode='$kode', nama='$nama', deskripsi='$deskripsi', stok='$stok', harga='$harga', berat='$berat' WHERE kode='$kode'";

$query = mysqli_query($conn, $sql);
if( $query ) {
		header('Location: data-barang.php');
	} else {
		die("gagal mengedit...");
	}
} 
?>
