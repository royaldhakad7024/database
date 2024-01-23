<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="myDB";
// // Create connection
// $conn = mysqli_connect($servername, $username, $password);

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";


// $conn = mysqli_connect($servername, $username, $password);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// // Create database
// $sql = "CREATE DATABASE myDB";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

// mysqli_close($conn);


// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// // sql to create table
// $sql = "CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if (mysqli_query($conn, $sql)) {
//   echo "Table MyGuests created successfully";
// } else {
//   echo "Error creating table: " . mysqli_error($conn);
// }

// mysqli_close($conn);


// $conn = mysqli_connect($servername, $username, $password, $dbname);
// if (!$conn){
//     die("connection failed: " . mysqli_connect_error());
// }
// $sql = "SELECT * /*id, firstname, lastname, email*/ FROM MyGuests ";
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0){
//     while($row = mysqli_fetch_assoc($result)){
//         echo "id: ". $row["id"]." - name: " . $row["firstname"] . "  " . $row["lastname"]. " - email: " . $row["email"]. "<br>";
//     }
// }
// else{
//     echo "0 results";
// }


// $conn = mysqli_connect($servername, $username, $password, $dbname);
// if (!$conn){
//     die("connection failed: ".mysqli_connect_error());
// }
// $sql = "UPDATE MyGuests set lastname = 'rajput' where id = '8'";
// if(mysqli_query($conn, $sql)){
//     echo "update record successfully";
// }
// else{
//     echo "Error deleting row". mysqli_error($conn);
// }
// mysqli_close($conn);










?>