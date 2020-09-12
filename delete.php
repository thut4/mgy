<?php
//die(var_dump($_GET));
    require_once("connection.php");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement=$pdo->prepare("
        DELETE 
        FROM customer_info
        WHERE cid=:cid
    ");
    $statement->bindParam(":cid", $_GET['cid']);
    if($statement->execute()){
        header("location:name.php");
    }
?>
