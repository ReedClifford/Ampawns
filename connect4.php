<?php
		
	include "config.php";
	

	$name = $_POST["name"];
	$concern = $_POST["concern"];

	$type = $_POST["type"];
	$email = $_POST["email"];
	$cnumber = $_POST["cnumber"];
	
	$stmt = $con->prepare("insert into inquiries(name, email, cnumber, type, concern) values( ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $cnumber, $type, $concern);
    $stmt->execute();;
	$stmt->close();
	$con->close();
	echo "Thank you for reaching us";
	// include "contactus.php";
    
    

    
	
	
?>