/**
 * Check the first of the user 
 * 
 * @return 
 * true if the frist name matches with the naming pattern 
 * else return false if it not matches the naming pattern 
 * 
 */
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

/**
 * Check the second name of the user 
 * 
 * @returns
 * true if second matches with pattern 
 * else it return false if it not matches with the pattern 
 */
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

/**
 * Chech the email of the user 
 * 
 * @retrun 
 * true if the pattern matches with the string 
 * else return false if it not matches with the input email id 
 * 
 */
function email_check()
    {
          
        var input = document.getElementById("email_input").value;
        var pattern = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
        if(input.match(pattern))
        {
            console.log("hello");
                
                return true;
        }
        else
        {
                document.getElementById("email_error").innerHTML="invalid email";
                return false;
        }
    }

/**
 * check the phone no. of the user 
 * 
 * @return 
 * true if the input phone no matches with the input string 
 * false if the phone no. does not matches.
 */
document.getElementById('phno').onsubmit = phone_no_check;
function phone_no_check(){
    var valid_pattern = /^[0-9]{10}$/;
    var input = document.getElementById('phno').value;
    if(input.match(valid_pattern)){
        console.log('true');
        return true;
    } else{
        console.log('false');
        document.getElementById('ph_no_error').innerHTML = "invalid phone number";
        return false;
    }
}

//form send 
form_call.onsubmit = async (e) => {
    e.preventDefault();
    document.getElementById("fname_error").innerHTML = "  ";
    document.getElementById("sname_error").innerHTML = " ";
    document.getElementById('ph_no_error').innerHTML = " ";
    document.getElementById("email_error").innerHTML=" ";
    if(firstname_check() && secondname_check() && email_check() && phone_no_check()){
        let response = await fetch('regvalid',{
            method: 'POST',
            body: new FormData(form_call)
        });
        let result ="";
        try{
            result = await response.json();
        } catch(e) {
            console.log('json file problem');
        }
        console.log(result);
        if(result.error == "true"){
            window.location.href = "login";
         } else {
            document.getElementById('user_name_error').innerHTML = "User name is already present";
        }
    }
}
