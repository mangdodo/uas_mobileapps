<?php
	include 'Conn.php';

	$id=$_POST['id'];
	$connect->query("DELETE FROM tb_barang WHERE id=".$id);

?>