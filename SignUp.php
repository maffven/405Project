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

      if (empty($_POST["email"])) {
        $emailerr = 'email is required';
      } else {
        $email = test_input($_POST["email"]);
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



<form method ="post" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <p id="login"> Register </p>
    <label>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------</label>
    <br>
    <br>
    <label> Gender: 
     <label> Female
     <input type="radio" name="gender" value="Female" id="Female"></label>
     <?php if(isset($genderErr)) { ?>
      <span><?php echo $genderErr ?></span>
      <?php } ?>
     <label> Male
     <input type="radio" name="gender" value="Male" id="Male"></label></label>
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