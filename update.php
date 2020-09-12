<?php
//die(var_dump($_GET,$_POST));
    require_once("connection.php");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement=$pdo->prepare("
        UPDATE customer_info
        SET name=:name,phone=:phone,ward=:ward,street=:street
        WHERE cid=:cid
    ");
    $statement->bindParam(":cid", $_POST['cid']);
    $statement->bindParam(":name", $_POST['name']);
    $statement->bindParam(":phone", $_POST['phone']);
    $statement->bindParam(":ward", $_POST['ward']);
    $statement->bindParam(":street", $_POST['street']);
    if($statement->execute()){
        header("location:name.php");
    }
?>
