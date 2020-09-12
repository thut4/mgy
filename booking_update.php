<?php
//die(var_dump($_GET,$_POST));
    require_once("connection.php");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement=$pdo->prepare("
        UPDATE booking
        SET adult=:adult,child=:child,hotel_name=:hotel_name,room_type=:room_type,name=:name
        WHERE id=:id
    ");
    $statement->bindParam(":id", $_POST['id']);
    $statement->bindParam(":adult", $_POST['adult']);
    $statement->bindParam(":child", $_POST['child']);
    $statement->bindParam(":hotel_name", $_POST['hotel_name']);
    $statement->bindParam(":room_type", $_POST['room']);
    $statement->bindParam(":name", $_POST['name']);
   
    if($statement->execute()){
        header("location:booking_dashboard.php");
    }
