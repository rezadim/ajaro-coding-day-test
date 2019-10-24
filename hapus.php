<?php 
require 'config.php';

if(isset( $_GET['id'] ) ) {
	$id = $_GET['id'];
	$del = "DELETE FROM data_barang WHERE id=$id";
	$query = mysqli_query($conn, $del);
    
    if( $query ) {
		header( 'Location: data-barang.php' );
	} else {
		die( "gagal menghapus..." );
	}
}

?>