

function submitdata() { 
  var r = confirm('Press ok to confirm your submission.');

   if (r == true) {

       window.open('http://www.google.com');
   } else {
       alert('Submission Failed');
   }
   return false;         

}

function addHintTextPassword(){
  document.getElementById("herPass").placeholder = "Enter a password longer than 6 characters";
}
function addHintTextFirstName(){
  document.getElementById("firstName").placeholder = "Type your first name here please";
}
function addHintTextLastName(){
  document.getElementById("lastName").placeholder = "Type your last name here please";
}

function addHintTextUserName(){
  document.getElementById("username").placeholder = "Type your user name here please";
}

function changeColor(id){
  document.getElementById(id).style.color="green";
}