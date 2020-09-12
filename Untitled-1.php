<?php
require_once("connection.php");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $pdo->prepare("
    select * from customer_info where restaurant='Nyein'  
    ");
if ($statement->execute()) {
    $result = $statement->fetch(PDO::FETCH_OBJ);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>

<body>
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-8">
                <?php if ($result) : ?>
                    <h3 class="text-primary text-center">Order From Nyein</h3>
                    
                        <p class="text-primary">
                            <?php echo $result->name ?> - <?php echo $result->restaurant ?>
                        </p>
                  
                <?php else : ?>
                    <h1 class="text-center text-danger"> Data Not Found </h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>



<div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-8 mt-4 shadow p-3 mb-5 bg-white rounded">
                <h1 class="text-primary text-center">Order Received</h1>
                <h4 class="text-right text-info">Total Orders=<?php echo rowCount($pdo, "SELECT * FROM `customer_info`") ?></h4>
                <ul class="list-unstyled text-right">
                    <li class="text-info">Order From Nyein=<?php echo rowCount($pdo, "SELECT * FROM `customer_info` WHERE restaurant='Nyein'") ?></li>
                    <li class="text-info">Order From Thu=<?php echo rowCount($pdo, "SELECT * FROM `customer_info` WHERE restaurant='Thu'") ?></li>
                    <li class="text-info">Order From Immortal=<?php echo rowCount($pdo, "SELECT * FROM `customer_info` WHERE restaurant='Immortal'") ?></li>
                    <li class="text-info">Order From HighClass=<?php echo rowCount($pdo, "SELECT * FROM `customer_info` WHERE restaurant='HighClass'") ?></li>
                     <li class="text-info">Order From Cafe Miso=<?php echo rowCount($pdo, "SELECT * FROM `customer_info` WHERE restaurant='MiSo'") ?></li>
 <li class="text-info">Order From Cafe YoeShin=<?php echo rowCount($pdo, "SELECT * FROM `customer_info` WHERE restaurant='YoeShin'") ?></li>

                </ul>
                <hr>
                <?php if ($results) : ?>
                    <?php foreach ($results as $result) : ?>
                        <ul class="list-unstyled">
                            <li>
                                <h3 class="text-primary"><a href="show.php?cid=<?php echo $result->cid; ?>"><?php echo $result->name ?>, Restaurant:<?php echo $result->restaurant ?></h3></a>
                            </li>
                        </ul>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="card">
                        <h3 class="text-danger text-center">No Order found in Database.</h3>
                    </div>
                <?php endif;  ?>
            </div>
        </div>
    </div>