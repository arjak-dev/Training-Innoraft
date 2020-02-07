var f = document.getElementById("form1");

function firstname_check(){
    var name_pattern = /^[a-zA-Z]+$/;

    var first_name = document.getElementById("fname").value;    
    if(first_name.match(name_pattern) && first_name.trim() != ""){
        document.getElementById("fname_error").innerHTML = "  ";
        return true;
    }else{
        document.getElementById("fname_error").innerHTML = "*Invalid Input";
        return false;
    }
}



//second name checking 
function secondname_check(){
 
    var name_pattern = /^[a-zA-Z]+$/;
    var second_name= document.getElementById("sname").value;
    if(second_name.match(name_pattern) && second_name.length > 0){
       
         document.getElementById("sname_error").innerHTML = " ";
        return true;
    }else{
        document.getElementById("sname_error").innerHTML = "*Invalid Input";
        return false;
    }
}

//code for the full name 
document.getElementById("sname").onblur = fullname_fill;
function fullname_fill(){
        var fname = document.getElementById('fname').value;
        var sname = document.getElementById('sname').value;
        fullname.value = fname.concat(" ", sname);
}

//form send 
form_call.onsubmit = function(){
    if(firstname_check() && secondname_check()){
        return true;
    }else{
        return false;
    }
}
