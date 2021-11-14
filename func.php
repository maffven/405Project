<?php

include 'connection.php';



function addUser($Fname, $Lname, $reason, $gender,$email, $password,$major){
  
 $sql = "INSERT INTO User (Id,Firstname,Lastname,Email,Pass,Reason,Gender,Major)
 VALUES ('1', '$fname','$lname','$email','$password','$reason','$gender','$major')";
 if ($conn->query($sql) === TRUE) {   
     echo "New record created successfully";} else {  
          echo "Error: " . $sql . "<br>" . $conn->error;}
}
?>

/*function create_db(){
  // Create database
 // $sql = "CREATE DATABASE myDB"
  ;if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";} else { 
         echo "Error creating database: " . $conn->error;}$conn->close();
}


/*function create_user_table(){
// sql to create table
$sql = "CREATE TABLE Users (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),password VARCHAR(50))";if ($conn->query($sql) === TRUE) { 
     echo "Table User created successfully";} else {   
     echo "Error creating table: " . $conn->error;}$conn->close();
}


/*function create_workshops_table(){
// sql to create table
$sql = "CREATE TABLE Workshops (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,date TIMESTAMP NOT NULL,
email VARCHAR(50))";
if ($conn->query($sql) === TRUE) { 
     echo "Table Workshop created successfully";} 
  else {   
     echo "Error creating table: " . $conn->error;}$conn->close();
}*/
?>