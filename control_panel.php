<!DOCTYPE html>

<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/style.css" rel="stylesheet" media="all">

    
      <title>Restaurant Advisor</title>
  </head>
  
  <div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href=index.php>Find Me Food</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Control Panel</a>
            </li>
        </ul>
    </nav>
</div>

  <body style="background-color:#E64C86;">
  <img src="./images/logo.gif" class="logo" alt="logo">
  <button type="button" class="btn btn-success" onclick="newEntry()">New Entry</button>

  <table class="table table-striped table-dark">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Restaurant</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <?php


    class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    
    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }
    

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "restaurants";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, r_name, r_address, r_phone, r_edit, r_delete FROM restaurants");
    $stmt->execute();
    
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
echo "</table>";
?>
</table>

</body>
</html>
<script>
    function editEntry(id) {
        window.location = "edit.php?id=" + id;
    }
    function deleteEntry(id) {
        window.location = "delete.php?id=" + id;
    }
    function newEntry() {
        window.location = "add_record.php?";
    }
</script>