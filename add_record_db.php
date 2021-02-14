<?php

  $r_name = $_GET['r_name'];
  $r_address = $_GET['r_address'];
  $r_phone = $_GET['r_phone'];
  $r_long = $_GET['r_long'];
  $r_lat = $_GET['r_lat'];

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "restaurants";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT id FROM restaurants";
  $result = $conn->query($sql);
  $id = count($result);
  $r_edit = '<button class=\"button\" onclick=\"editEntry('.$id.')\">Edit</button>';
  $r_delete = '<button class=\"button\" onclick=\"deleteEntry('.$id.')\">Delete</button>';
  $sql = 'INSERT INTO restaurants (r_name, r_address, r_phone, r_edit, r_delete, r_long, r_lat) VALUES ("'.$r_name.'", "'.$r_address.'", "'.$r_phone.'", "'.$r_edit.'", "'.$r_delete.'", "'.$r_long.'", "'.$r_lat.'")';
  if ($conn->query($sql, $values) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
?>

<script>
    window.location = "control_panel.php"
</script>