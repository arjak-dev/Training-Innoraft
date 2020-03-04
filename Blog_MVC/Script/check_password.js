function check_password(){
  var new_password = document.getElementById('new_password').value;
  var confirm_password = document.getElementById('confirm_password').value;
  // console.log(new_password);
  // console.log(confirm_password);
  if (new_password === confirm_password) {
    return true;
  } else {
    alert('Password doesnot match');
    return false;
  }
}

form_call.onsubmit = function() {
  return check_password();
}