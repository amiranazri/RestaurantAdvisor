<?php
$servername = "mysql:host=localhost";
$username = "root";
$password = "root";
$dbname = "restaurants";

try 
{
  $sql = "CREATE DATABASE IF NOT EXISTS restaurants";
  $conn = new PDO($servername, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->exec($sql);
	echo "Database created.♡<br>";
}
catch(PDOException $e)
{
  die("Error : " . $e->getMessage());
}

try {
  $conn = new PDO("$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $sql = "CREATE TABLE IF NOT EXISTS restaurants (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    r_name VARCHAR(300) NOT NULL,
    r_address VARCHAR(300) NOT NULL,
    r_phone VARCHAR(50) NOT NULL,
    r_edit VARCHAR(600) NOT NULL,
    r_delete VARCHAR(600) NOT NULL
    )";

    $conn->exec($sql);
    
    $sql = "INSERT INTO restaurants (r_name, r_address, r_phone, r_edit, r_delete)
    VALUES 
    ('Angelo\'s Pizza', 'Spar Centre 93 Randpark Drive, Randburg 2188 South Africa', '+27117921722', '<button class=\"button\" onclick=\"edit(1)\">Edit</button>', '<button class=\"button\" onclick=\"delete(1)\">Delete</button>'),
    ('Marble Restaurant', 'Trumpet on Keyes Corner 19 Keyes and, Jellicoe Ave, Rosebank, Johannesburg, 2196', '+27105945550', '<button class=\"button\" onclick=\"edit(1)\">Edit</button>', '<button class=\"button\" onclick=\"delete(1)\">Delete</button>'),
    ('The Whippet Coffee Linden', '34 7th Str And 4th Avenue Linden, Randburg 2195 South Africa', '+27105945550', '<button class=\"button\" onclick=\"edit(1)\">Edit</button>', '<button class=\"button\" onclick=\"delete(1)\">Delete</button>'),
    ('Fusionista', '14 Rabie Street, Randburg 2194 South Africa', '+27117934796', '<button class=\"button\" onclick=\"edit(1)\">Edit</button>', '<button class=\"button\" onclick=\"delete(1)\">Delete</button>'),
    ('Balata Restaurant', 'Setperk Street The Fairway Hotel, Spa & Golf Resort, Randburg 2125 South Africa', '+27114788000', '<button class=\"button\" onclick=\"edit(1)\">Edit</button>', '<button class=\"button\" onclick=\"delete(1)\">Delete</button>'),
    ('La Mama Restaurant', '90 Oxford Street Ferndale, Randburg 2194 South Africa', '+27763939836', '<button class=\"button\" onclick=\"edit(1)\">Edit</button>', '<button class=\"button\" onclick=\"delete(1)\">Delete</button>'),
    ('Nando\'s Banbury Drive Thru', 'Olievenhout Avenue Shop B1, Northview Centre, Randburg 2162 South Africa', '+27117949774', '<button class=\"button\" onclick=\"edit(1)\">Edit</button>', '<button class=\"button\" onclick=\"delete(1)\">Delete</button>'),
    ('The Local Grill', '7th 3rd Avenue Parktown North, Johannesburg 2193 South Africa', '+27118801946', '<button class=\"button\" onclick=\"edit(1)\">Edit</button>', '<button class=\"button\" onclick=\"delete(1)\">Delete</button>'),
    ('1920 Portuguese Restaurant', '1 Hutton Court Cnr Jan Smuts & Summit Road, Randburg 2196 South Africa', '+27113263161', '<button class=\"button\" onclick=\"edit(1)\">Edit</button>', '<button class=\"button\" onclick=\"delete(1)\">Delete</button>'),
    ('Yung Chen Craighall', '339 Jan Smuts Avenue Shepherd Market, Craighall, Randburg 2196 South Africa', '+27113254899', '<button class=\"button\" onclick=\"edit(1)\">Edit</button>', '<button class=\"button\" onclick=\"delete(1)\">Delete</button>')";
    
    $conn->exec($sql);
}
catch(PDOException $e)
{
  die("Error : " . $e->getMessage());
}
$conn = null;
?>