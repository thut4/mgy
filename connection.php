<?php
try {
    $pdo = new PDO("mysql:dbname=food_delivery;host=localhost", 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}
