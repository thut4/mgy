<?php
require_once("connection.php");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $pdo->query("select * from customer_info");
if ($statement) {
    $results = $statement->fetchAll(PDO::FETCH_OBJ);
}
function rowCount($pdo, $query)
{
    $statement = $pdo->prepare($query);
    $statement->execute();
    return $statement->rowCount();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <style>
        body {
            background-image: radial-gradient(circle farthest-corner at 20% 20%, rgba(100, 92, 106, 10) 0%, rgba(32, 45, 58, 1) 81.3%);
        }

        hr {
            background-color: wheat;
        }

        a {
            color: whitesmoke;
        }

        .col-8 {
            background-image: linear-gradient(109.6deg, rgba(6, 2, 2, 1) 32.4%, rgba(137, 30, 47, 1) 98.8%);
        }
    </style>
</head>

<body>
    <?php if (isset($_REQUEST["submit"])) : ?>
        <?php $statement = $pdo->prepare(
            "SELECT * FROM admin WHERE username=:username AND password=:password"
        );
        $statement->bindParam(":username", $_POST['username']);
        $statement->bindParam(":password", $_POST['password']); ?>
        <?php if ($statement->execute()) : ?>
            <?php $result = $statement->fetch(PDO::FETCH_OBJ); ?>
            <?php if ($result) : ?>
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-8  mt-4 shadow p-3 mb-5 bg-white rounded">
                            <h1 class="text-primary text-center">Order Received</h1>
                            <h4 class="text-right text-info">Total Orders=<?php echo rowCount($pdo, "SELECT * FROM `customer_info`") ?></h4>
                            <ul class="list-unstyled text-right">
                                <li class="text-info">Order From Nyein=<?php echo rowCount($pdo, "SELECT * FROM `customer_info` WHERE restaurant='Nyein'") ?></li>
                                <li class="text-info">Order From Thu=<?php echo rowCount($pdo, "SELECT * FROM `customer_info` WHERE restaurant='Thu'") ?></li>
                                <li class="text-info">Order From Immortal=<?php echo rowCount($pdo, "SELECT * FROM `customer_info` WHERE restaurant='Immortal'") ?></li>
                                <li class="text-info">Order From HighClass=<?php echo rowCount($pdo, "SELECT * FROM `customer_info` WHERE restaurant='HighClass'") ?></li>
                            </ul>
                            <hr>
                            <?php if ($results) : ?>
                                <?php foreach ($results as $result) : ?>
                                    <ul class="list-unstyled">
                                        <li>
                                            <h3 class="text-monospace"><a href="show.php?cid=<?php echo $result->cid; ?>"><?php echo $result->name ?>
                                                    <br>Restaurant:<?php echo $result->restaurant ?></a></h3>
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
            <?php else : ?>
                <h1 class="text-danger text-center">Username of Password Incorect</h1>
            <?php endif;  ?>
        <?php endif;  ?>
    <?php endif;  ?>

</body> 

</html>