<?php
    //die(var_dump($_GET));
    require_once("connection.php");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare("select * from booking where id=:id");
    $statement->bindParam(":id",$_GET['id']);
    if($statement->execute()){
        $results=$statement->fetch(PDO::FETCH_OBJ);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
               <?php if($results):?>
                <p class="text-primary text-left ml-3 mt-2">Check in date : <?php echo $results->check_in;?></p>
                <p class="text-primary text-left ml-3">Check in date : <?php echo $results->check_out;?></p>
                <p class="text-primary text-left ml-3">Adult : <?php echo $results->adult;?></p>
                <p class="text-primary text-left ml-3">Child : <?php echo $results->child;?></p>
                <p class="text-primary text-left ml-3">Room Type : <?php echo $results->room_type;?></p>
                <p class="text-primary text-left ml-3">Name : <?php echo $results->name;?></p>
                <p class="text-primary text-left ml-3">Phone : <?php echo $results->phone;?></p>
                
                <div>
                <a href="booking_dashboard.php" class="btn btn-primary ml-3">Home</a>
                <a href="hotel_edit.php?id=<?php echo $results->id; ?>" class="btn btn-info ">Edit</a>
                <a href="booking_delete.php?id=<?php echo $results->id; ?>" class="btn btn-danger ">Delete</a>
                </div>
                </div>
               <?php else: ?>
                <p class="text-danger">Data not found.</p>
               <?php  endif; ?>
            </div>
        </div>
    </div>
</body>

</html>