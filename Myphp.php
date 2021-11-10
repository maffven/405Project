<?php 
$Fnameerr = $Lnameerr  = $majorerr = $passworderr = $usernameerr = $gendererr = $agreementerr = " ";
$Fname = $Lname  = $major = $password = $username = $gender = $agreement = $reason=  " ";

if ($_SERVER["REQUEST_METHOD"] == "POST"){


    if (empty($_POST["Fname"])) {
        $Fnameerr = 'First name is required';
      } else {
        $Fname = test_input($_POST["Fname"]);
      }

      if (empty($_POST["Lname"])) {
        $Lnameerr = 'Last name is required';
      } else {
        $Lname = test_input($_POST["Lname"]);
      }

      if (empty($_POST["username"])) {
        $usernameerr = 'username is required';
      } else {
        $username = test_input($_POST["username"]);
      }

      if (empty($_POST["password"])) {
        $passworderr = 'password is required';
      } else {
        $password = test_input($_POST["password"]);
      }

      if (empty($_POST["Lname"])) {
        $Lnameerr = 'Last name is required';
      } else {
        $Lname = test_input($_POST["Lname"]);
      }

      if (empty($_POST["reason"])) {
        $reason = '';
      } else {
        $reason = test_input($_POST["reason"]);
      }

      if (!isset($_POST["gender"])) {
        $genderErr = 'Gender is required';
      } else {
        $gender = test_input($_POST["gender"]);
      }

      if($_POST['major'] == -1){
          $majorerr = 'Major is required';
      }else{
          $major = test_input($_POST["major"]);
      }
      if(filter_has_var(INPUT_POST,'agreement')){
        $agreement = test_input($_POST["agreement"]);
    }else{
        $agreementerr = 'Please agree first';
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  


?> 