<?php 

$connect = mysqli_connect('localhost','root','','json');

$username = $_GET['username'];
$balance = $_GET['balance'];

$insert = "INSERT INTO saldo(id,username,balance)VALUES('','$username','$balance')";
$store=mysqli_query($connect,$insert);

if($store){
	echo "berhasil input pelanggan";
 }else{
 	echo "gagal input pelanggan";
 }
 ?>
