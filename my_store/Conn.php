<?php

$connect = new mysqli("localhost","root","","my_store");

if($connect) {
	echo "Connection Success";
}else{
	echo "Connection Failed";
	exit();
}