<?php
 $host = "ruapdbserver.mysql.database.azure.com";
 $user = "ruapUser@ruapdbserver";
 $pwd = "Ruap1234";
 $db = "ruapdb";
 // $host = "m1simunovic-mysqldbserver.mysql.database.azure.com";
 // $user = "ruapUser@m1simunovic-mysqldbserver";
 // $pwd = "NhZs.418";
 // $db = "ruapdb";
 $conn = mysqli_connect($host,$user,$pwd);
 // Check connection
 if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 else {
 echo 'Connected successfully';
 }
 $sql = 'CREATE Database ruapdb';
 if ($conn->query($sql) === TRUE) {
 echo "Database created successfully";
 } else {
 echo "Error creating database: " . $conn->error;
 }
 mysqli_select_db($conn,$db);
 $sql_create = "CREATE TABLE registration_tbl(id INT NOT NULL
 AUTO_INCREMENT, PRIMARY KEY(id), name VARCHAR(30), email
 VARCHAR(30), date DATE);";
 if ($conn->query($sql_create) === TRUE) {
 echo "Table registration_tbl created successfully";
 } else {
 echo "Error creating table: " . $conn->error;
 }
 $conn->close();
?>