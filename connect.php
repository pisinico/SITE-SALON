<?php
     $email = $_POST['email'];
     $telefon =$_POST['telefon'];
     $parola = $_POST['parola'];

     // Database connection
	$conn = new mysqli('localhost','root','','date-logare');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into inregistrare(email, telefon, parola) values(?, ?, ?)");
		$stmt->bind_param("sis", $email, $telefon, $parola);
		$execval = $stmt->execute();
		echo $execval;
		echo "Inregistrare facuta cu succes!";
		$stmt->close();
		$conn->close();
	}

?>

