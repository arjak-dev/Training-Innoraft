$(document).ready(function(){
    $(".section1 button").click(function(){
        $(".section1 div").animate({
            height: "300px",
        });
    });
    $(".section2 button").click(function(){
        $(".section2 div").animate({ marginLeft: 400});
    });
    $(window).scroll(function(){
        if($(window).scrollTop()>=700 && $(window).scrollTop()<=900){
            //console.log($(window).scrollTop());
            $('.section3 div').css({
                position: 'fixed',
                top: '0',
                width: '100%'
            });
        }
        else{
            $('.section3 div').css({position: 'static'});
        }
        // if($(window).scrollTop()>900) {
        //     $('#div3').css({position: 'static'});
        // }
        // if($(window).scrollTop()<700) {
        //     
        // }

        
    });
    $('.section5 button').click(function(){
        $(".section5 p:nth-child(3)").wrap("<div style='background:red'></div>");
    });
    $('.section9 button').click(function(){
        $('.section9 input').val('Done');
        $('.section9 button').prop("disabled",true);
    });
    $(".section6 button").click(function(){
        $(".section6 p").each(function(index,value){
            const p_block = $(value).attr('class');
            if(p_block == undefined){
                $(value).css("background","none")
            }
        })
   });
    $('.section7 button').click(function(){
        $(".section7 ul li:nth-child(n+4):nth-child(-n+6)").css("background", "red");



        // var li = $('#section7').find('li');
        // for(const[i,val] of Object.entries(li)){
        //     if(($(val).text()) >=4 && ($(val).text()) <=6){
        //         $(val).
        //     }
        // }
    });
    $('.section8 button').click(function(){
        $(".section8 ul li:nth-child(n+2)").css("border","2px solid red");
    });
    $('#tab1').click(function(){
        $('.active').text("Tab 1 content");
           });
    $('#tab2').click(function(){
        $('.active').text("tab 2 conetent");
    });
    $('.section10 button').click(function(){
        $("html").animate({scrollTop: 0}, 1000);
    });
});
