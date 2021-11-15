<?php
$servername = "localhost";
$username = "root";
$password = "";

try{
//Create database
$conn = new PDO("mysql:host=$servername", $username, $password);

// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE DATABASE Workshops";

// use exec() because no results are returned
$conn->exec($sql);
echo "Database created successfully<br>";

//create user table
$sql = "CREATE TABLE `user` (
  `Id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Major` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Firstname` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lastname` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Reason` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Agreement` bit(10) NOT NULL,
  `Gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
  
// use exec() because no results are returned
  $conn->exec($sql);
  echo "Table User created successfully";

// create workshop table
$sql = "CREATE TABLE `workshop` (
  `Title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Seats` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
  

// use exec() because no results are returned
  $conn->exec($sql);
  echo "Table Workshop created successfully";
  
  

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}



  

  










?>

