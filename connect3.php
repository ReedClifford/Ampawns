<?php
        
    include "config.php";
    
    $type = $_POST["type"];
    $pname = $_POST["pname"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $status="Pending";
    
    $stmt = $con->prepare("INSERT INTO pets(type, pname, age, sex, status) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss", $type, $pname, $age, $sex, $status);
    $stmt->execute();
    $stmt->close();
    $con->close();
    echo "New pet added.";


    
    
    
?>