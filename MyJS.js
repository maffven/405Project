function addHintTextFirstName(){
  document.getElementById("herPass").placeholder = "Type your password here please";
}
function run(){
  window.alert("don't stop");
}

function submitdata() { 
  var r = confirm('Press ok to confirm your submission.');

   if (r == true) {

       window.open('http://www.google.com');
   } else {
       alert('Submission Failed');
   }
   return false;         

}
