<?php 

$connect = mysqli_connect('localhost','root','','json');

$id = $_GET['id'];

$show = "SELECT * FROM saldo WHERE id='$id'";
$data=mysqli_query($connect,$show);
while ($dt = mysqli_fetch_array($data)) {
	$id = $dt['id'];
	$username = $dt['username'];
	$balance = $dt['balance'];

$st = json_encode(array(
						'id' 		=> $id,
						'username' 	=> $username,
						'balance'	=> $balance));
echo $st;
}
 ?>
