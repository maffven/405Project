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



<form method ="post" action ="Myphp.php">

    <p id="login"> Register </p>
    <label>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------</label>
    <br>
    <br>
    <label> Gender: 
     <label> Female
     <input type="radio" name="gender" value="Female" id="Female"></label>
     <?php if(isset($genderErr)) { ?>
      <p><?php echo $genderErr ?></p>
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
<br>
<tr>
    <p> First name<br>
        <input name="Fname" type="text" id="firstName" onblur="changeColor(id)" onfocus="addHintTextFirstName()">
        <?php if(isset($Fnameerr)) { ?>
      <p><?php echo $Fnameerr ?></p>
      <?php } ?>
     </p>
    </tr>
    <tr>
        <p> Last Name<br>
            <input name="Lname" type="text" id="lastName" onblur="changeColor(id)"  onfocus="addHintTextLastName()">
            <?php if(isset($Lnameerr)) { ?>
      <p><?php echo $Lnameerr ?></p>
      <?php } ?>
           </p>
    
        </tr>
        <tr>
<p> Email
    <br>


<input name="email" type="text"  id="email" onblur="changeColor(id)" onfocus="addHintTextEmail()">
<?php if(isset($emailerr)) { ?>
      <p><?php echo $emailerr ?></p>
      <?php } ?>
</p>
</tr>
<tr>
  
<p> Password
    <br>
  <input name="password" type="password" id="herPass" onfocus="addHintTextPassword()">
  <?php if(isset($passworderr)) { ?>
      <p><?php echo $passworderr ?></p>
      <?php } ?>
 
 </p>
</tr>
<tr>
    <p> <label> Reason <br>
        <br>
      <textarea name="reason" rows="10" col="1000" > Tell us why you want to register in our website</textarea>
      <?php if(isset($reasonerr)) { ?>
      <p><?php echo $reasonerr ?></p>
      <?php } ?>
      </label></p>
  </tr>
<tr>
  <p>
    <input name="agreement" type="checkbox"  >
    <label> I agree to recieve notifications regarding workshops via my email 
     </label>
     <?php if(isset($agreementerr)) { ?>
      <p><?php echo $agreementerr ?></p>
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