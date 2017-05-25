<?php

header("Access-Control-Allow-Origin: *");

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$db = "it255-dz10";
	$conn = new mysqli($servername, $username, $password, $db);

 
if(isset($_POST['nazivjela']) && isset($_POST['cena']))
{
	$nazivjela = $_POST['nazivjela'];
	$cena = $_POST['cena'];
		
	$stmt = $conn->prepare("INSERT INTO meni (nazivjela, cena) VALUES (?, ?)");
	$stmt->bind_param("ss", $nazivjela, $cena);
	$stmt->execute();
	echo "ok";
}
?>