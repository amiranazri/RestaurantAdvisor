<?php

$id = $_GET["id"];
$r_name = $_GET['r_name'];
$r_address = $_GET['r_address'];
$r_phone = $_GET['r_phone'];


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "restaurants";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE restaurants SET r_name='$r_name' , r_address='$r_address' , r_phone='$r_phone' WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
?>

<script>
    window.location = "control_panel.php"
</script>