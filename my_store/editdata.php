<?php
	include 'Conn.php';
	$id = $_POST['id'];
	$namabarang = $_POST['nama_barang'];
	$stok = $_POST['stok'];
	$price = $_POST['price'];
	$jenisbarang = $_POST['jenis_barang'];

	$connect->query("UPDATE tb_barang SET nama_barang='".$namabarang."', stok='".$stok."', price='".$price."', jenis_barang='".$jenisbarang."' WHERE id=". $id);
?>