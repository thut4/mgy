<?php
    //die(var_dump($_GET));
    require_once("connection.php");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare("select * from customer_info where cid=:cid");
    $statement->bindParam(":cid",$_GET['cid']);
    if($statement->execute()){
        $results=$statement->fetch(PDO::FETCH_OBJ);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                <h4 class="text-text-monospace text-center">Order Details</h4>
               <?php if($results):?>
                <p class="text-primary text-left ml-5 mt-4">Name : <?php echo $results->name;?></p>
                <p class="text-primary text-left ml-5">Phone : <?php echo $results->phone;?></p>
                <p class="text-primary text-left ml-5">Ward : <?php echo $results->ward;?></p>
                <p class="text-primary text-left ml-5">Street : <?php echo $results->street;?></p>
                <p class="text-primary text-left ml-5">Restaurant : <?php echo $results->restaurant;?></p>
                <p class="text-primary text-left ml-5">Menu : <?php echo $results->menu;?></p>
                <p class="text-primary text-left ml-5">Date : <?php echo $results->date;?></p>
                <div>
                <a href="name.php" class="btn btn-primary ml-5 mb-5">Home</a>
                <a href="edit.php?cid=<?php echo $results->cid; ?>" class="btn btn-info mb-5">Edit</a>
                <a href="delete.php?cid=<?php echo $results->cid; ?>" class="btn btn-danger mb-5">Delete</a>
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