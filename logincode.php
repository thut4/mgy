<?php
    require_once("connection.php");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_REQUEST["submit"])){
        $statement=$pdo->prepare(
            "SELECT * FROM admin WHERE username=:username AND password=:password"
        );
        $statement->bindParam(":username",$_POST['username']);
        $statement->bindParam(":password",$_POST['password']);
        if($statement->execute()){
            $result=$statement->fetch(PDO::FETCH_OBJ);
                if($result){
                    header("location:name.php");
                }
                else{
                    echo "<h1>Username of Password Incoorect</h1>";
                }
        }
    }
?>