var f = document.getElementById("form1");

function firstname_check(){
    var name_pattern = /^[a-zA-Z]+$/;

    var first_name = document.getElementById("fname").value;    
    if(first_name.match(name_pattern) && first_name.trim() != ""){
       
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

//marks check
function marks_check(){
    var input=document.getElementById('marks').value;
    var split = input.split("\n");
    var valid_pattern = /^[a-zA-Z]+\|[0-9]+\n*$/;
	var i; 
	for(i=0;i<split.length;i++)
	{
		if(!split[i].match(valid_pattern)){
            document.getElementById('marks_error').innerHTML = "*Invalid Format";
            return false;
		}      	
    }
	return true;
}

//form send 
form_call.onsubmit = function(){
    document.getElementById("fname_error").innerHTML = "  ";
    document.getElementById('marks_error').innerHTML = " ";	
    document.getElementById("sname_error").innerHTML = " ";
    if(firstname_check() && secondname_check() && marks_check()){
        return true;
    }else{
        return false;
    }
}
