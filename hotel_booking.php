<?php
require_once("connection.php");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (isset($_REQUEST['submit'])) {
    $statement = $pdo->prepare("
        INSERT INTO `booking`(`check_in`,`check_out`,`adult`,`child`,`hotel_name`,`room_type`,`name`,`phone`)
        VALUES(:check_in,:check_out,:adult,:child,:hotel_name,:room_type,:name,:phone)
    ");
    $statement->bindParam(":check_in", $_POST['check_in']);
    $statement->bindParam(":check_out", $_POST['check_out']);
    $statement->bindParam(":adult", $_POST['adult']);
    $statement->bindParam(":child", $_POST['child']);
    $statement->bindParam(":hotel_name", $_POST['hotel_name']);
    $statement->bindParam(":room_type", $_POST['room']);
    $statement->bindParam(":name", $_POST['name']);
    $statement->bindParam(":phone", $_POST['phone']);
    if ($statement->execute()) {
        header("location:booking_received.php");
    }  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MGY4U</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-4">
            <div class="col-9">
                <h3 class="text-primary text-center">
                    Hotel Booking
                </h3>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="check_in">Check in Date</label>
                        <input type="date" class="form-control" name="check_in">
                    </div>
                    <div class="form-group">
                        <label for="check_out">Check out Date</label>
                        <input type="date" class="form-control" name="check_out">
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="adult">Adult</label>
                            <select name="adult" class="form-control">
                                <option selected disabled>Adult</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="Child">Child</label>
                            <select name="child" class="form-control">
                                <option selected disabled>Child</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="room">RoomType</label>
                            <select name="room" class="form-control">
                                <option selected disabled>Room Type</option>
                                <option value="Standard Double Room">Standard Double Room</option>
                                <option value="Superior Room">Superior Room</option>
                                <option value="Family Room">Family Room</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hotel_name">Hotel Name</label>
                        <select name="hotel_name" class="form-control">
                            <option selected disabled>Select Hotel</option>
                            <option value="Nan Htike Thu">Nan Htike Thu</option>
                            <option value="My River View">My River View</option>
                            <option value="Phan Khar Myay">Phan Khar Myay</option>
                            <option value="Magway Hotel">Magway Hotel</option>
                            <option value="Htein Htein Tha">Htein Htein Tha</option>
                            <option value="Pha Tha Da">Pha Tha Da</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="phone" class="form-control" name="phone" placeholder="Phone" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" name="submit">Book</button>
                    </div>
                </form>
            
            </div>
        </div>
    </div>
</body>

</html>