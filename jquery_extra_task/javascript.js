//Increase height by 300px
document.querySelector(".section1 button").onclick = function(){
  document.querySelector(".section1 div").style.height = '300px';
}

//move right by 400px
document.querySelector(".section2 button").onclick = function(){
  var margin =0;
  setInterval(function() {
    if (margin <= 400) { 
      margin += 5;
      document.querySelector(".section2 div").style.marginLeft=margin+"px";
    }
    else {
      clearInterval();
    }
  }, 10);
}

//After scroll 700px from top this section need to be fixed at top and after 900px it will return his actual position
window.onscroll = function() {
  if (window.pageYOffset>700 && window.pageYOffset<900) {
    document.querySelector(".full").style.position = "fixed";
    document.querySelector(".full").style.top = "0";
    document.querySelector(".full").style.width = "100%";
  }
  else { 
    document.querySelector(".full").style.position = "static";
  }
}

//On button click Wrap second paragraph with a div
document.querySelector(".section5 button").onclick = function(){
  var p = document.querySelector(".section5 p:nth-child(3)");
  //creating wrapper container
  var div = document.createElement('div');
  //inserting the div before p in the DOM tree
  p.parentNode.insertBefore(div, p);
  //move p into div
  div.appendChild(p);
}

//on button click change input field value and disable the button
document.querySelector(".section9 button").onclick = function(){
  document.querySelector(".section9 input").value = "done";
  document.querySelector(".section9 button").disabled = true; 
}

//remove backgrounf which does not have class
document.querySelector(".section6 button").onclick = function(){
  document.querySelector(".section6 p:not([class]").style.background = "none";    
}

//On click add background color inside 4, 5 and 6
document.querySelector(".section7 button").onclick = function(){
  var li = document.querySelectorAll(".section7 li:nth-child(n+4):nth-child(-n+6)");
  li.forEach(function(item,index) {
    item.style.background = "Red";
  });
}

//except 1 add border color to all element
document.querySelector(".section8 button").onclick = function(){
  var li = document.querySelectorAll(".section8 li:nth-child(n+2)");
  li.forEach(function (item,index){
    item.style.border = "1px solid red";
  });
}

//after click on tab button content section need to be change
document.querySelector(".section4 button:nth-child(1)").onclick = function() {
  document.querySelector(".active").innerHTML = "tab 1 content changed";
}
document.querySelector(".section4 button:nth-child(2)").onclick = function() {
  document.querySelector(".active").innerHTML = "tab 2 content changed";
}

//on button click back to top with smooth scroll
document.querySelector(".section10 button").onclick = function(){
  setInterval(function() {
      window.scrollTo(0, window.pageYOffset-50);
  }, 20);
}
