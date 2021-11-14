<?php

include 'connection.php';

function addUser($Fname, $Lname, $reason, $gender,$email, $password,$major){
    echo "hi";

    try {
       
        $sql = "INSERT INTO User (Id, Pass, Email, Major, Firstname, Lastname, Reason, Agreement, Gender)
        VALUES ('1','$password','$email','$major','$fname','$lname','$reason','true','$gender')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
      
   /* $sql = "INSERT INTO `User`(`Id`, `Pass`, `Email`, `Major`, `Firstname`, `Lastname`, `Reason`, `Agreement`, `Gender`) 
    VALUES ('1','$password','$email','$major','$fname','$lname','$reason','true','$gender')";
$run = mysqli_query($conn,$sql) or die (mysqli_error());
if($run){
    echo "form submitted successfully";
}

echo "form not submitted successfully";*/
/* $sql = "INSERT INTO 'User' (Id,Firstname,Lastname,Email,Pass,Reason,Gender,Major)
 VALUES ('1', '$fname','$lname','$email','$password','$reason','$gender','$major')";
 if ($conn->query($sql) === TRUE) {   
     echo "New record created successfully";} else {  
          echo "Error: " . $sql . "<br>" . $conn->error;}*/
}
?>
