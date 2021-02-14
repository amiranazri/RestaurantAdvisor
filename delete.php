<?php

    $id = htmlspecialchars($_GET["id"]);

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "restaurants";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM restaurants WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
?>

<script>
    window.location = "control_panel.php"
</script>