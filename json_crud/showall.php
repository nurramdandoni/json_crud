<?php 

$connect = mysqli_connect('localhost','root','','json');


$show = "SELECT * FROM saldo";
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
