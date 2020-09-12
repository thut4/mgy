<?php
//die(var_dump($_POST));
require_once("connection.php");
//$pdo = new PDO("mysql:dbname=food_delivery;host=localhost", 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$nameErr = "";
if (isset($_REQUEST["submit"])) {
    if (isset($_REQUEST["menu"])) {
        $menus = implode(",", $_REQUEST["menu"]);
        //$drink=implode(",",$_REQUEST["drinks"]);
    }
    $statement = $pdo->prepare("
        INSERT INTO `customer_info`(`name`,`phone`,`ward`,`street`,`restaurant`,`menu`,`quantity`,`date`)
        VALUES(:name,:phone,:ward,:street,:restaurant,:menu,:quantity,:date)
    ");
    date_default_timezone_set('Asia/Yangon');
    $dt = date("Y-m-d H:i:s");
    //$dt = (new DateTime())->format('Y-m-d H:i:s');
    $statement->bindParam(":name", $_POST['name']);
    $statement->bindParam(":phone", $_POST['phone']);
    $statement->bindParam(":ward", $_POST['ward']);
    $statement->bindParam(":street", $_POST['street']);

    $statement->bindParam(":restaurant", $_POST['rest']);
    //$statement->bindParam(":foods_price", $_POST['foods_price']);
    $statement->bindParam(":menu", $menus);
    $statement->bindParam(":quantity", $_POST['quantity']);
    $statement->bindParam(":date", $dt);
    //$statement->bindParam(":drinks_price", $_POST['drinks_price']);
    //$statement->bindParam(":total", $_POST['total']);

    if ($statement->execute()) {
        header("location:recieved.php");
    }
}
