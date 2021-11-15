
<!--HTML PROJECT SIGN UP  -->
<!DOCTYPE html>
<html>
    <head>
        <title>
           Sign up 
        </title>
        <link rel="stylesheet" type="text/css" href="Mystyle.css"/>
       
    </head>
    <body onload="run()">
    <?php 
$Fnameerr = $Lnameerr  = $majorerr = $passworderr = $emailerr = $gendererr = $agreementerr = " ";
$Fname = $Lname  = $major = $password = $email = $gender = $agreement = $reason=  " ";
$conn = $sql ="";
$checkMajor = $checkEmail = $checkFn = $checkGender = $checkLn = $checkReason = $checkAgree= $checkPass =0;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'func.php';
    if (empty($_POST["Fname"])) {
        $Fnameerr = 'First name is required';
      } else {
        $Fname = test_input($_POST["Fname"]);
        $checkFn=1;
      }

      if (empty($_POST["Lname"])) {
        $Lnameerr = 'Last name is required';
      } else {
        $Lname = test_input($_POST["Lname"]);
        $checkLn=1;
      }

  
      $emailValidation = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL); //to filter characters
      if (empty($_POST["email"])) {
        $emailerr = 'email is required';
      } else if((filter_var($emailValidation,FILTER_VALIDATE_EMAIL)) === false){
        $emailerr = 'email is not valid';
      }else if(checkEmail($_POST["email"]) === false){
        $emailerr = 'This email is already exist';
      }
      else{
        $email = test_input($_POST["email"]);
        $checkEmail=1;
      }


      
      if (empty($_POST["password"])) {
        $passworderr = 'password is required';
      }else if(strlen($_POST['password'])<= 6 ){
        $passworderr= 'password must be greater than 6 characters'; 
      }else{
        $password = test_input($_POST["password"]);
        $checkPass=1;
      }
  
      if (empty($_POST["reason"])) {
        $reason = '';
      } else {
        $reason = test_input($_POST["reason"]);
        $checkReason=1;
      }

      if (!isset($_POST["gender"])) {
        $genderErr = 'Gender is required';
      } else {
        $gender = test_input($_POST["gender"]);
        $checkGender=1;
      }

      if($_POST['major'] == -1){
          $majorerr = 'Major is required';
      }else{
          $major = test_input($_POST["major"]);
          $checkMajor=1;
      }
      if(filter_has_var(INPUT_POST,'agreement')){
        $agreement = test_input($_POST["agreement"]);
        $checkAgree=1;
    }else{
        $agreementerr = 'Please agree first';
     
    }
  
  if($checkEmail==1 && $checkFn==1 && $checkGender==1 && $checkLn==1 && $checkMajor==1 && $checkPass
==1 && $checkReason==1 && $checkAgree==1){
    addUser($Fname, $Lname, $reason, $gender,$email, $password, $major);
   
}
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
 
?>

        <header>
            <nav id="menu">
                    <label class="logo"><a href="HomePage.html"><img src="image/logo.png" alt="FCIT logo" height="77" width="60"></a></label> 
                   <ul>
                    <li><a calss="active" href="HomePage.html">Home</a></li>
                <li><a href="index.html">Workshops</a></li>
                <li><a href="LOGIN.html">Login</a></li>
                   </ul>
                </nav>
        </header>
        
    <table>
<tbody>
   <tr>
    <img src="image/signup.png" width="290px" height="200px">
   </tr>
   <tr>



   <form method ="post" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onreset="return cancelCreate();">

    <p id="login"> Register </p>
    <label>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------</label>
    <br>
    <br>
    <label> Gender: 
     <label> Female
     <input type="radio" name="gender" value="Female" id="Female"></label>
     <label> Male
     <input type="radio" name="gender" value="Male" id="Male"></label></label>
     <?php if(isset($genderErr)) { ?>
      <h5><?php echo $genderErr ?></h5>
      <?php } ?>
     <br>
    </tr>
<br>
<tr>
    <label> Your major:
<select name="major">  
<option id="IT"> IT </option>
<option id="IS"> IS </option>
<option id="CS"> CS</option>
</select>
<?php if(isset($majorerr)) { ?>
      <p><?php echo $majorerr ?></p>
      <?php } ?>
    </label>
</tr>
<br>
<tr>
    <p> First name<br>
        <input name="Fname" type="text" id="firstName" onblur="changeColor(id)" onfocus="addHintTextFirstName()">
        <?php if(isset($Fnameerr)) { 
            
            ?>
      <h5><?php echo $Fnameerr ?></h5>
      <?php } ?>
     </p>
    </tr>
    <tr>
        <p> Last Name<br>
            <input name="Lname" type="text" id="lastName" onblur="changeColor(id)"  onfocus="addHintTextLastName()">
            <?php if(isset($Lnameerr)) { ?>
      <h5><?php echo $Lnameerr ?></h5>
      <?php } ?>
           </p>
    
        </tr>
        <tr>
<p> Email
    <br>


<input name="email" type="text"  id="email" onblur="changeColor(id)" onfocus="addHintTextEmail()">
<?php if(isset($emailerr)) { ?>
      <h5><?php echo $emailerr ?></h5>
      <?php } ?>
</p>
</tr>
<tr>
  
<p> Password
    <br>
  <input name="password" type="password" id="herPass" onfocus="addHintTextPassword()">
  <?php if(isset($passworderr)) { ?>
      <h5><?php echo $passworderr ?></h5>
      <?php } ?>
 
 </p>
</tr>
<tr>
    <p> <label> Reason <br>
        <br>
      <textarea name="reason" rows="10" col="1000" > Tell us why you want to register in our website</textarea>
      <?php if(isset($reasonerr)) { ?>
      <h5><?php echo $reasonerr ?></h5>
      <?php } ?>
      </label></p>
  </tr>
<tr>
  <p>
    <input name="agreement" type="checkbox"  >
    <label> I agree to recieve notifications regarding workshops via my email 
     </label>
     <?php if(isset($agreementerr)) { ?>
      <h5><?php echo $agreementerr ?></h5>
      <?php } ?>
     <br>
     <br>
    <input type="submit" value="Sign Up">
    <input type="reset" value="Cancel" >

</form>

</p>
</tr>
<br>
<br>

</tbody>
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
<script src="MyJS.js"></script>


</body>
</html>