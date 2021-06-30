<?php
	include 'Conn.php';

	$namabarang = $_POST['nama_barang'];
	$stok = $_POST['stok'];
	$price = $_POST['price'];
	$jenisbarang = $_POST['jenis_barang'];

	$connect->query("INSERT INTO tb_barang (nama_barang,stok,price,jenis_barang) VALUES('".$namabarang."','".$stok."','".$price."','".$jenisbarang."')")
?>