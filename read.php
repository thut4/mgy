<?php
//die(var_dump($_GET));
require_once("connection.php");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $pdo->prepare("select * from customer_info where restaurant like :restaurant");
$statement->bindParam(":restaurant",$_POST['restaurant']);
/*if ($statement->execute()) {
    $customer_info = $statement->fetch(PDO::FETCH_OBJ);
   if($customer_info){
        echo"<p>{$customer_info->name}</p>";
    } 
   else {
    echo "Something went wrong";
}
}*/
?>
