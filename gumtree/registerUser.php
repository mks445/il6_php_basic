<?php include 'parts/header.php'; ?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = 'shop_lt';

try {
    $conn = new PDO("mysql:host=$servername;dbname=" . $dbName, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$sql = 'SELECT * FROM cities';
$rez = $conn->query($sql);
$cities = $rez->fetchAll();


?>

    <form action="submitUser.php" method="post">
        <input name="name" type="text" placeholder="name"><br>
        <input name="surname" type="text" placeholder="surname"><br>
        <input name="email" type="email" placeholder="email"><br>
        <input name="phone" type="text" placeholder="phone"><br>
        <input name="password" type="password" placeholder="**********"><br>
        <select name="city">
            <?php foreach ($cities as $city) {
                echo '<option value="' . $city['id'] . '">' . $city['name'] . '</option>';
            } ?>
        </select>

        <br><input type="submit" value="create" name="create"></br>
    </form>
<?php include 'parts/footer.php'; ?>