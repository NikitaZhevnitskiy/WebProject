<?php
//connect database
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

	//first query
	$query1 = "SELECT * FROM Brukere";
	$result=mysqli_query($conn,$query1);

	while ($person = mysqli_fetch_array($result)) {
			echo $person['ID'].' '.$person['Navn'].' '.$person['Alder']."<br/>";
	}

	echo "Ferdig!";


	$query2 = "UPDATE Brukere SET Navn='HUI',Alder=27 WHERE ID= 0";

	mysqli_query($conn, $query2);
	echo mysqli_affected_rows($conn);


	// sql prepared statement

	$stmt = $conn->prepare("INSERT INTO Brukere (Navn, Alder) VALUES (?, ?)");
	$stmt->bind_param("si", $nyttNavn, $alder);
	$stmt->execute();






	// prepare statement
	$stmt = $conn->prepare("INSERT INTO Brukere (Navn, Alder) VALUES (?, ?)");
	$stmt->bind_param("si", $lastname, $age);
	static $count= 0;
	// set parameters and execute

	$lastname = "Doe";
	$age = 13;
	$stmt->execute();
	$count++;

	$lastname = "Dewqeqe";
	$age = 16;
	$stmt->execute();
	$count++;

	$lastname = "qwqweqDoe";
	$age = 23;
	$stmt->execute();
	$count++;

	echo "New records created successfully ".$count;

	$stmt->close();
	$conn->close();


?>
