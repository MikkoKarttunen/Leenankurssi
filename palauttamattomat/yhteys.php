<?php
$training = $_POST['training'];
$sleep = $_POST['sleep'];
$eating = $_POST['eating'];
$liikunta = $_POST['liikunta'];
$mieliala = $_POST['mieliala'];
$muuta = $_POST['muuta'];


	$dphost = 'localhost';
	$dbusername = 'root';
	$dbpassword = '';
	$dbname = 'test';

	$conn = mysqli_connect($dphost, $dbusername, $dbpassword, $dbname);

	$sql = "INSERT Into merkinta (harjoitustenkesto, unimaara, ruokailu, liikunta, mieliala, ominsanoin) VALUES ('$training', '$sleep', '$eating', '$liikunta', '$mieliala', '$muuta');"; 
	mysqli_query($conn, $sql);

	header("Location: merkinta.php");
?>