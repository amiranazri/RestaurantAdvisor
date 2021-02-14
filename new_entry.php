<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet" media="all">

    <title>Add New Restaurant</title>
</head>

<body>
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
        
        $sql = "SELECT r_name, r_address, r_phone FROM restaurants where id = $id";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              $r_name = $row["r_name"];
              $r_address = $row["r_address"];
              $r_phone = $row["r_phone"];
          }
        } else {
          echo "0 results";
        }
        $conn->close();
    ?>
    <div class="page-wrapper bg-flow p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Update Restaurant Details</h2>
                </div>
                <div class="card-body">
                    <?php 
                        echo '<form action="update.php" method="get">
                        <div class="form-row m-b-55">
                            <div class="name">Restaurant</div>
                            <div class="value">
                                <div class="row row-space">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="r_name" value="'.$r_name.'">
                                            <label class="label--desc">Restaurant Name</label>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="r_address" value="'.$r_address.'">
                                    <label class="label--desc">Restaurant Address</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="r_phone" value="'.$r_phone.'">
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div> 
                        
                            <input type="hidden" name="id" id="id" value="' .$id. '" />
                            <input class="btn btn--radius-2 btn--red" type="submit" value="Update" />
                        </div>
                    </form>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>