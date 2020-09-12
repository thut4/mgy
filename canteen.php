<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="show.css">
    <script src="main1.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-3">
            <div class="col-9">
                <h3 class="text-primary text-center">Canteen Delivery</h3>
                <div class="card">
                    <form action="canteen_order.php" method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name *" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="phone" name="phone" class="form-control" placeholder="Phone *" pattern="^[0-9]*$">
                        </div>
                        <div class="form-group">
                            <label for="ward">Department</label>
                            <!--<input list="ward-address" id="address" name="ward" class="form-control" placeholder="Choose Ward">-->
                            <select id="ward-address" name="ward" class="form-control form-control-sm" required>
                                <option selected disabled>--Select Department--</option>
                                <option value="Faculty of Computer Science">Faculty of Computer Science</option>
                                <option value="Faculty of Computer Systems & Technologies">Faculty of Computer Systems & Technologies</option>
                                <option value="Faculty of Inforamtion Science">Faculty of Information Science</option>
                                <option value="Faculty of Computing">Faculty of Computing</option>
                                <option value="Department of Information Technology Supporting & Maintenance">Department of Information Technology Supporting & Maintenance</option>
                                <option value="Department of Natural Science">Department of Natural Science</option>
                                <option value="Department of Language">Department of Language</option>
                                <option value="Department of Admin">Department of Admin</option>
                                <option value="Department of Finance">Department of Finance</option>
                                <option value="Department of Student Affairs">Department of Affairs</option>
                                <option value="Lobby">Lobby</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="res">Select Shop</label>
                            <select name="rest" id="rest" class="form-control" onchange="configureDropDownLists(this,document.getElementById('menu'))" required>
                                <option selected="">Select Shop</option>
                                <option value="CanteenEast">UCSMGY Canteen East</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="menu[]" id="menu" class="form-control form-control-sm" multiple="multiple">
                                <option selected="">Choose Menu</option>
                            </select>
                        </div>
                        <div class="form--group">
                            <label for="amount">Quantity</label>
                            <input type="number" name="quantity" min="0" max="10" class="form-control mb-3">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" name="submit">Submit</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>