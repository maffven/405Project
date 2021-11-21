

function confirmCreate() {


  if (confirm('Press ok to confirm your submission.')== true) {

    return true;
  } else {
    
    alert('Submission Failed');
    return false;

  }


}
function viewDetails(){

  window.location.replace('View.php');
}
function cancelCreate() {
  var r = confirm('Are you sure you want to cancel?');

  if (r == true) {

    window.location.replace('home.php');
  } else {
    alert('Cancellation Failed');
  }
  return false;

}

function addHintTextPassword() {
  document.getElementById("herPass").placeholder = "Enter a password longer than 6 characters";
}
function addHintTextFirstName() {
  document.getElementById("firstName").placeholder = "Type your first name here please";
}
function addHintTextLastName() {
  document.getElementById("lastName").placeholder = "Type your last name here please";
}

function addHintTextEmail() {
  document.getElementById("email").placeholder = "Type your email here please";
}

function changeColor(id) {
  document.getElementById(id).style.color = "green";
}