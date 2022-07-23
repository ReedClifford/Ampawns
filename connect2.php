<?php
        
    include "config.php";
    
    if($x==4){
    
    $stmt = $con->prepare("insert into volunteers(name, age, adrs, email, cnumber) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $age, $adrs, $email, $cnumber);
    $stmt->execute();;
    $stmt->close();
    $con->close();
    echo'<script type="text/javascript">alert("Thank you for registering. Expect to hear from us soon.")</script>';
    include "index.php";
    }
    
    
    
    
?>