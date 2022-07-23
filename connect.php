<?php
		
	include "config.php";
	

    if($x==5){
	
	$stmt = $con->prepare("insert into registration(name, adrs, email, cnumber, zdate, ztime) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $adrs, $email, $cnumber, $zdate, $ztime);
    $stmt->execute();;
	$stmt->close();
	$con->close();
	echo'<script type="text/javascript">alert("Thank you for registering. Expect to hear from us soon.")</script>';
	include "index.php";
    }
    

    
	
	
?>