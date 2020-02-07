//Increase height by 300px
document.querySelector(".section1 button").onclick = function(){
    document.querySelector(".section1 div").style.height = '300px';
}

//move right by 400px
document.querySelector(".section2 button").onclick = function(){
   var margin =0;
    setInterval(() => {
        if(margin!=400){
            margin += 5;
            document.querySelector(".section2 div").style.marginLeft=margin+"px";}
    }, 10);
}

//remove backgrounf which does not have class
document.querySelector(".section6 button").onclick = function(){
    document.querySelector(".section6 p:not([class]").style.background = "none";    
}


//On click add background color inside 4, 5 and 6
document.querySelector(".section7 button").onclick = function(){
    document.querySelector(".section7 li:nth-child(n+4):nth-child(-n+6)").style.background="red";
}

document.querySelector(".section8 button").onclick = function(){
    document.querySelector(".section8 li:gt(1)  ").style.border = "red";
}

