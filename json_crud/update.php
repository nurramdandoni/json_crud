<?php 

$connect = mysqli_connect('localhost','root','','json');

$id = $_GET['id'];
$balance = $_GET['balance'];

$update = "UPDATE saldo SET balance='$balance' WHERE id='$id'";
$set=mysqli_query($connect,$update);

if($set){
	echo "berhasil update pelanggan";
 }else{
 	echo "gagal update pelanggan";
 }
 ?>
