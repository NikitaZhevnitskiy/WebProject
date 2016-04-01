<?php
const SERVER = "localhost";
		const USERNAME = "admin";
		const PASSWD = "admin";
		const DB = "PJ2100_2016";

		// Create connection
		$conn = mysqli_connect(SERVER, USERNAME, PASSWD, DB);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected successfully <br/>";

echo "Legger inn ny bruker i database: <br/>";

$nyttNavn = $_POST['navn'];
$alder = $_POST['alder'];
	
$stmt = $conn->prepare("INSERT INTO Brukere (Navn, Alder) VALUES (?, ?)");

$stmt->bind_param("si", $nyttNavn, $alder);
$stmt->execute();

?>