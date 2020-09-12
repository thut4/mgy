<?php
//die(var_dump($_GET));
    require_once("connection.php");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement=$pdo->prepare("
        DELETE 
        FROM booking
        WHERE id=:id
    ");
    $statement->bindParam(":id", $_GET['id']);
    if($statement->execute()){
        header("location:booking_dashboard.php");
    }
