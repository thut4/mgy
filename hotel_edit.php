<?php
require_once("connection.php");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $pdo->prepare("SELECT * FROM booking WHERE id=:id");
$statement->bindParam(":id", $_GET['id']);
if ($statement->execute()) {
    $result = $statement->fetch(PDO::FETCH_OBJ);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <script src="another.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-9">
                <h3 class="text-primary">Update</h3>
                <?php if ($result) : ?>
                    <form action="hotel_update.php" method="POST">
                        <input type="text" class="form-control" name="cid" value="<?php echo $result->cid; ?>" hidden>
                        <div class="row">
                            <div class="col">
                                <label for="adult">Adult</label>
                                <select name="adult" class="form-control">
                                    <option selected disabled>Adult</option>
                                    <option value="1" <?php if ($result->adult == "1") {
                                                            echo "selected";
                                                        } ?>>1</option>
                                    <option value="2" <?php if ($result->adult == "2") {
                                                            echo "selected";
                                                        } ?>>2</option>
                                    <option value="3" <?php if ($result->adult == "3") {
                                                            echo "selected";
                                                        } ?>>3</option>
                                    <option value="4" <?php if ($result->adult == "4") {
                                                            echo "selected";
                                                        } ?>>4</option>
                                    <option value="5" <?php if ($result->adult == "5") {
                                                            echo "selected";
                                                        } ?>>5</option>
                                    <option value="6" <?php if ($result->adult == "6") {
                                                            echo "selected";
                                                        } ?>>6</option>
                                    <option value="7" <?php if ($result->adult == "7") {
                                                            echo "selected";
                                                        } ?>>7</option>
                                    <option value="8" <?php if ($result->adult == "8") {
                                                            echo "selected";
                                                        } ?>>8</option>
                                    <option value="9" <?php if ($result->adult == "9") {
                                                            echo "selected";
                                                        } ?>>9</option>
                                    <option value="10" <?php if ($result->adult == "10") {
                                                            echo "selected";
                                                        } ?>>10</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="Child">Child</label>
                                <select name="child" class="form-control">
                                    <option selected disabled>Child</option>
                                    <option value="0" <?php if ($result->child == "0") {
                                                            echo "selected";
                                                        } ?>>0</option>
                                    <option value="1" <?php if ($result->child == "1") {
                                                            echo "selected";
                                                        } ?>>1</option>
                                    <option value="2" <?php if ($result->child == "2") {
                                                            echo "selected";
                                                        } ?>>2</option>
                                    <option value="3" <?php if ($result->child == "3") {
                                                            echo "selected";
                                                        } ?>>3</option>
                                    <option value="4" <?php if ($result->adult == "4") {
                                                            echo "selected";
                                                        } ?>>4</option>
                                    <option value="5" <?php if ($result->adult == "5") {
                                                            echo "selected";
                                                        } ?>>5</option>
                                    <option value="6" <?php if ($result->adult == "6") {
                                                            echo "selected";
                                                        } ?>>6</option>
                                    <option value="7" <?php if ($result->child == "7") {
                                                            echo "selected";
                                                        } ?>>7</option>
                                    <option value="8" <?php if ($result->child == "8") {
                                                            echo "selected";
                                                        } ?>>8</option>
                                    <option value="9" <?php if ($result->child == "9") {
                                                            echo "selected";
                                                        } ?>>9</option>
                                    <option value="10" <?php if ($result->child == "10") {
                                                            echo "selected";
                                                        } ?>>10</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="room">RoomType</label>
                                <select name="room" class="form-control">
                                    <option selected disabled>Room Type</option>
                                    <option value="Standard Double Room" <?php if ($result->room_type == "Standard Double Room") {
                                                            echo "selected";
                                                        } ?>>Standard Double Room</option>
                                    <option value="Superior Room" <?php if ($result->room_type == "Superior Room") {
                                                            echo "selected";
                                                        } ?>>Superior Room</option>
                                    <option value="Family Room" <?php if ($result->room_type == "Family Room") {
                                                            echo "selected";
                                                        } ?>>Family Room</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hotel_name">Hotel Name</label>
                            <select name="hotel_name" class="form-control">
                                <option selected disabled>Select Hotel</option>
                                <option value="Nan Htike Thu" <?php if ($result->hotel_name == "Nan Htike Thu") {
                                                            echo "selected";
                                                        } ?>>Nan Htike Thu</option>
                                <option value="My River View" <?php if ($result->hotel_name == "My River View") {
                                                            echo "selected";
                                                        } ?>>My River View</option>
                                <option value="Phan Khar Myay" <?php if ($result->hotel_name == "Phan Khar Myay") {
                                                            echo "selected";
                                                        } ?>>Phan Khar Myay</option>
                                <option value="Magway Hotel" <?php if ($result->hotel_name == "Magway") {
                                                            echo "selected";
                                                        } ?>>Magway Hotel</option>
                                <option value="Htein Htein Tha" <?php if ($result->hotel_name == "Htein Htein Tha") {
                                                            echo "selected";
                                                        } ?>>Htein Htein Tha</option>
                                <option value="Pha Tha Da" <?php if ($result->hotel_name == "Pha Tha Da") {
                                                            echo "selected";
                                                        } ?>>Pha Tha Da</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Update</button>
                            <a href="booking_dashboard.php" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                <?php else : ?>
                    <p class="text-danger text-center">No Data Found</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>