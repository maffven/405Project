<?php

//include 'connection.php';

function addUser($Fname, $Lname, $reason, $gender,$email, $password,$major){
$servername = "localhost";
$username = "root";
$password = "";
$id = rand();
try{
// Create connection
$conn = new PDO ("mysql:host=$servername;dbname=Workshops",$username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "connected successfully";

}catch(PDOException $e){
 //   echo "connection failed";
}

$id = '';
for($i = 0; $i < 5; $i++) {
    $id .= mt_rand(0, 9);
}
   try {
        $sql = "INSERT INTO User (Id, Pass, Email, Major, Firstname, Lastname, Reason, Agreement, Gender)
        VALUES ('$id','$password','$email','$major','$Lname','$Fname','$reason','1','$gender')";
        // use exec() because no results are returned
        $conn->exec($sql);
        //echo "New record created successfully";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
      
   
}
?>
