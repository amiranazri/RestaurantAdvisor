var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "root",
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  sql = "DROP DATABASE IF EXISTS restaurants";
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("Database Dropped");
    sql = "CREATE DATABASE restaurants";
    con.query(sql, function (err, result) {
      if (err) throw err;
      console.log("Database Created");
      sql = "USE restaurants";
      con.query(sql, function (err, result) {
        if (err) throw err;
        console.log("Database Used");
        sql = `CREATE TABLE restaurants (
              id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              r_name VARCHAR(300) NOT NULL,
              r_address VARCHAR(300) NOT NULL,
              r_phone VARCHAR(50) NOT NULL,
              r_edit VARCHAR(600) NOT NULL,
              r_delete VARCHAR(300) NOT NULL,
              r_long VARCHAR(300) NOT NULL,
              r_lat VARCHAR(300) NOT NULL
              )`;
        con.query(sql, function (err, result) {
          if (err) throw err;
          console.log("Tables Created");
          sql = "INSERT INTO restaurants (r_name, r_address, r_phone, r_edit, r_delete, r_long, r_lat) VALUES ?";
          values = [     
                ['Angelo\'s Pizza', 'Spar Centre 93 Randpark Drive, Randburg 2188 South Africa', '+27117921722', '<button class=\"button\" onclick=\"editEntry(1)\">Edit</button>', '<button class=\"button\" onclick=\"deleteEntry(1)\">Delete</button>', '27.942560', '-26.083370'],
                ['Marble Restaurant', 'Trumpet on Keyes Corner 19 Keyes and, Jellicoe Ave, Rosebank, Johannesburg, 2196', '+27105945550', '<button class=\"button\" onclick=\"editEntry(2)\">Edit</button>', '<button class=\"button\" onclick=\"deleteEntry(2)\">Delete</button>', '28.036489', '-26.144100'],
                ['The Whippet Coffee Linden', '34 7th Str And 4th Avenue Linden, Randburg 2195 South Africa', '+27105945550', '<button class=\"button\" onclick=\"editEntry(3)\">Edit</button>', '<button class=\"button\" onclick=\"deleteEntry(3)\">Delete</button>', '28.036489', '-26.144100'],
                ['Fusionista', '14 Rabie Street, Randburg 2194 South Africa', '+27117934796', '<button class=\"button\" onclick=\"editEntry(4)\">Edit</button>', '<button class=\"button\" onclick=\"deleteEntry(4)\">Delete</button>', '27.989200', '-26.110110'],
                ['Balata Restaurant', 'Setperk Street The Fairway Hotel, Spa & Golf Resort, Randburg 2125 South Africa', '+27114788000', '<button class=\"button\" onclick=\"editEntry(5)\">Edit</button>', '<button class=\"button\" onclick=\"deleteEntry(5)\">Delete</button>', '27.973480', '-26.119750'],
                ['La Mama Restaurant', '90 Oxford Street Ferndale, Randburg 2194 South Africa', '+27763939836', '<button class=\"button\" onclick=\"editEntry(6)\">Edit</button>', '<button class=\"button\" onclick=\"deleteEntry(6)\">Delete</button>', '27.979980', '-26.083020'],
                ['Nando\'s Banbury Drive Thru', 'Olievenhout Avenue Shop B1, Northview Centre, Randburg 2162 South Africa', '+27117949774', '<button class=\"button\" onclick=\"editEntry(7)\">Edit</button>', '<button class=\"button\" onclick=\"deleteEntry(7)\">Delete</button>', '-26.068230', '27.924259'],
                ['The Local Grill', '7th 3rd Avenue Parktown North, Johannesburg 2193 South Africa', '+27118801946', '<button class=\"button\" onclick=\"editEntry(8)\">Edit</button>', '<button class=\"button\" onclick=\"deleteEntry(8)\">Delete</button>', '28.028481', '-26.147770'],
                ['1920 Portuguese Restaurant', '1 Hutton Court Cnr Jan Smuts & Summit Road, Randburg 2196 South Africa', '+27113263161', '<button class=\"button\" onclick=\"editEntry(9)\">Edit</button>', '<button class=\"button\" onclick=\"deleteEntry(9)\">Delete</button>', '28.033530', '-26.128200'],
                ['Yung Chen Craighall', '339 Jan Smuts Avenue Shepherd Market, Craighall, Randburg 2196 South Africa', '+27113254899', '<button class=\"button\" onclick=\"editEntry(10)\">Edit</button>', '<button class=\"button\" onclick=\"deleteEntry(10)\">Delete</button>', '28.030550', '-26.123420']
          ];
          con.query(sql, [values], function (err, result) {
            if (err) throw err;
            console.log("Tables Filled");
          });
        });
      });
    });
  });
});