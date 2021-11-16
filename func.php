<?php

//include 'connection.php';
$result = 0;
function addUser($Fname, $Lname, $reason, $gender, $email, $passwordd, $major)
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $id = rand();
  try {
    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=Workshops", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connected successfully";

  } catch (PDOException $e) {
    // echo "connection failed";
  }

  $id = '';
  for ($i = 0; $i < 5; $i++) {
    $id .= mt_rand(0, 9);
  }
  try {
    $sql = "INSERT INTO User (Id, Password, Email, Major, Firstname, Lastname, Reason, Agreement, Gender)
        VALUES ('$id','$passwordd','$email','$major','$Lname','$Fname','$reason','1','$gender')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo '<script> alert("Registered successfully")</script>';
    //echo "New record created successfully";
  } catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
}

function addWorkShop($title, $desc, $seats)
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  try {
    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=Workshops", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connected successfully";

  } catch (PDOException $e) {
    // echo "connection failed";
  }
  try {
    $sql = "INSERT INTO workshop (Title, Description, Seats)
          VALUES ('$title','$desc', $seats)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo '<script> alert("Registered successfully")</script>';
    //echo "New record created successfully";
  } catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
}

function checkSeats($title)
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  try {
    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=Workshops", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connected successfully";


    $stmt = $conn->prepare("SELECT Seats FROM workshop WHERE Title = '$title';");
    $stmt->execute();
    while ($result = $stmt->fetch()) {
      return $result['Seats'];
    }
  } catch (PDOException $e) {
    echo "connection failed";
  }
}

function checkLogin($email, $passwordd)
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  try {
    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=Workshops", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connected successfully";

  } catch (PDOException $e) {
    // echo "connection failed";
  }

  $sql = "SELECT * FROM User WHERE Email = '$email' AND Password = '$passwordd'";
  $result = $conn->query($sql);
  if ($result->rowCount() > 0) {
    echo '<script> alert("Logged in successfully")</script>';
    header("Location: home.php", TRUE, 302);
    // echo "Logged in successfully";
  } else {
    echo '<script> alert("Login info is wrong")</script>';
    //echo "Login info is wrong";
  }
}

function checkEmail($email)
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $id = rand();
  try {
    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=Workshops", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connected successfully";

  } catch (PDOException $e) {
    // echo "connection failed";
  }

  $sql = "SELECT Email FROM User WHERE Email = '$email'";
  $result = $conn->query($sql);
  if ($result->rowCount() > 0) {
    return false;
  }
}

function updateSeat($seatNum, $title)
{
  
  $seatNum -= 1;
  $servername = "localhost";
  $username = "root";
  $password = "";
  try {
    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=Workshops", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE workshop SET Seats='$seatNum' WHERE Title='$title'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $_SESSION['isreg']=$seatNum;
?>
  <?php
  } catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
}
  ?>