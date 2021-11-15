<!--HTML PROJECT LOGIN-->
<!DOCTYPE html>
<html>
    <head>
        <title>
          Login 
        </title>
         
        <link rel="stylesheet" type="text/css" href="Mystyle.css"/>
    </head>
    
    <body>
      <header>
        <nav id="menu">
                <label class="logo"><a href="HomePage.html"><img src="image/logo.png" alt="FCIT logo" height="77" width="60"></a></label> 
               <ul>
                <li><a calss="active" href="HomePage.html">Home</a></li>
                <li><a href="index.html">Workshops</a></li>
                <li><a href="LOGIN.php">Login</a></li>
               </ul>
            </nav>
    </header>
    
    <table>
      <thead>
      </thead>
<tbody>
   <tr>
  
     <img src="image/login.png" width="290px" height="190px">

   </tr>
   <tr>
    <?php 
 $checkEmail =  $checkPass =0;
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'func.php';
 if (empty($_POST["email"])) {
    $emailerr = 'email is required';
  } else {
    $email = test_input($_POST["email"]);
    $checkEmail=1;
  }

  if (empty($_POST["password"])) {
    $passworderr = 'password is required';
  } else {
    $password = test_input($_POST["password"]);
    $checkPass=1;
  }

if($checkPass==1 && $checkEmail==1){
  checkLogin($email, $password);
   $email = validate($_POST['email']);
    $password = validate($_POST['password']);
   
}
 }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
<form method ="post" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <p id="login"> Login </p>
<p> 
<input name="email" type="text" value="Email" id=herEmail>
<?php if(isset($emailerr)) { ?>
      <h5><?php echo $emailerr ?></h5>
      <?php } ?>
</p>
<p> 
  <input name="password" type="Password" value="Password" id="herPass">
  <?php if(isset($passworderr)) { ?>
      <h5><?php echo $passworderr ?></h5>
      <?php } ?>
 </p>
  <p>
    <input type="submit" value="Login">
  </p>
</form>


</tr>
<tr>

<a href="SignUp.php" > don't have an account? Create. </a>


</tr>
</tbody>
<br>
<br>
<br>
<br>
<tfoot>
  <tr>
      <footer>
          <nav id="footerNav">
            <p>CREATED BY Manar Hennawi 
              <a href="Mhennawi0006@stu.kau.edu.sa">Mhennawi0006@stu.kau.edu.sa</a>, 
               Amal Alsomali  <a href="aalsomali0026@stu.kau.edu.sa">Aalsomali0026@stu.kau.edu.sa</a>, 
               Lina Almansour <a href="Lalmansour0003@stu.kau.edu">Lalmansour0003@stu.kau.edu</a>, 
               Rawan Alghamdi <a href="Ralghmadi0926@stu.kau.edu.sa">Ralghmadi0926@stu.kau.edu.sa</a>
            </p>
       </nav> 
         </footer>
</tr>
</tfoot>
</table>
</body>
</html>