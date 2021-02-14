<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/style.css" rel="stylesheet" media="all">

      <title>Restaurant Advisor</title>

    <style type="text/css">
      #map {
        height: 400px;
        width: 100%; 
      }
    </style>
  </head>
  
  <div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Find Me Food</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="control_panel.php">Control Panel</a>
            </li>
        </ul>
    </nav>
</div>

  <body style="background-color:#E64C86;">
  <img src="./images/logo.gif" class="logo" alt="logo">
  
    <!--The div element for the map -->
    <div id="map">
      <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKgitQUXdH_y5mbp1cPaHQnjmDDZ1Ls8E&callback=initMap&libraries=&v=weekly"
        async>
      </script>
      <?php
          $servername = "localhost";
          $username = "root";
          $password = "root";
          $dbname = "restaurants";
          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql = "SELECT r_name, r_address, r_phone, r_long, r_lat FROM restaurants";
          $result = $conn->query($sql);
          $lat = array();
          $long = array();
          $name = array();
          $address = array();
          $phone = array();
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                array_push($lat, $row["r_lat"]);
                array_push($long, $row["r_long"]);
                array_push($name, $row["r_name"]);
                array_push($address, $row["r_address"]);
                array_push($phone, $row["r_phone"]);
            }
            $data = array($lat, $long, $name, $address, $phone);
          } else {
            echo "0 results";
          }
          $conn->close();
      ?>
      <script type="text/javascript"> var data = <?php echo json_encode($data);?> ; </script>
      <script type="text/javascript" src="./init_map.js"></script>
    </div>
  </body>
</html>