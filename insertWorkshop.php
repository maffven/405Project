<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Workshops";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // begin the transaction
  $conn->beginTransaction();
  // our SQL statements
  $conn->exec("INSERT INTO `workshop` (`Title`, `Description`, `Seats`) 
  VALUES ('Painting Workshop', 'The ability to understand color can easily be broken down into logical methodical elements.br>First, we will learn how to mix what we see by defining a color in terms of hue, saturation,and value.\r\nWith this method, students will gain the capability to match any color with ease.\r\nNext, we will discuss the use for a split primary palette,and the effects of transparent color.Students will understand the strengths and limitations of every color on and off their palette.', '50');");
  $conn->exec("INSERT INTO `workshop` (`Title`, `Description`, `Seats`) 
  VALUES ('Photography Workshop', 'The workshop will include hands-on demonstrations with the camera as well as basic digital image editing techniques.\r\nWe will discuss the work of great photographers alongside your own photographs in order to better understand the fundamentals of composition to create compelling imagery.\r\nExpect to leave the class with a project you are proud of and a working knowledge of your camera.', '50');");
  $conn->exec("INSERT INTO `workshop` (`Title`, `Description`, `Seats`) 
  VALUES ('Cake Decoration Workshop', 'Whether you fancy learning something new for fun, you’re new to cake decorating and want to learn new skills or you’re a cake business owner and would like to take your skills to the next level we have something for you.\r\nIf you’d like to learn how to properly decorate a cake with sugarpaste fondant then this class is for you. It’s perfect for beginners and improvers.', '50');");
  $conn->exec("INSERT INTO `workshop` (`Title`, `Description`, `Seats`) 
  VALUES ('Poster Design Workshop', 'Workshops emphasize poster design principles, appropriate sections for a research poster, presenting your poster, understanding your audience, and evaluating a poster.', '50');");
  

  // commit the transaction
  $conn->commit();
  echo "New records created successfully";
} catch(PDOException $e) {
  // roll back the transaction if something failed
  $conn->rollback();
  echo "Error: " . $e->getMessage();
}

$conn = null;
?>