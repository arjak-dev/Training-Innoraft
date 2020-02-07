
function email_check(){
  //  console.log("hello");
    var email = document.getElementById('email_input').value;
    var valid_input =  /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
    if(email.match(valid_input)){
        return true;
    }else{
        document.getElementById("email_error").innerHTML="invalid email";
        return false;
    }
}
document.getElementById('form_call').onsubmit = function(){
    // console.log("hi");
    document.getElementById('email_error').innerHTML = " ";
    if(email_check()){
         return true;
    }else
         return false;
    
    }
