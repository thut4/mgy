<?php
require_once("connection.php");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $pdo->query("select * from booking");
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
</head>

<body>
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1 class="text-primary text-center">Booking Received</h1>
                <h4 class="text-right text-info">Total Bookings=<?php echo rowCount($pdo, "SELECT * FROM `booking`") ?></h4>
                <hr>
                <?php if ($results) : ?>
                    <?php foreach ($results as $result) : ?>
                        <ul class="list-unstyled">
                            <li>
                                <h3 class="text-primary"><a href="booking_show.php?id=<?php echo $result->id; ?>"><?php echo $result->name ?></h3></a>
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
</body>

</html>