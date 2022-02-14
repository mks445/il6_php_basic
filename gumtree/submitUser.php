<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "shop_lt";

try {
    $conn = new PDO("mysql:host=$servername;dbname=" . $dbName, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $last_name = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $city_id = $_POST['city'];


    $sql = 'INSERT INTO users (name, last_name, email, password, phone, city_id, created_at) 
            VALUES ("' . $name . '", "' . $last_name . '", "' . $email . '", "' . $password . '", ' . $phone . ', ' . $city_id . ', NOW())';

//    echo $sql;
    $conn->query($sql);

}
