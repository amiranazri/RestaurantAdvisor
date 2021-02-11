<?php
$servername = "localhost";
$username = "amira";
$password = "1234";
$dbname = "RestaurantAdvisor";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "CREATE TABLE restaurants (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  r_name VARCHAR(30) NOT NULL,
  r_address VARCHAR(30) NOT NULL,
  r_phone VARCHAR(50) NOT NULL,
  )";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Table MyGuests created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>