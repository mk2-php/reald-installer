$(function(){


    $(".select_language").on("change",function(){
        console.log($(this).val());
        location.href=$(this).val();
    });

    var totalPoint=0;

    var h2=$("h2");
    var h3=$("h3");

    h2.attr("id","point_"+totalPoint);

    var str="<ul>";

    str+='<li><a href="#" class="_h2" data-link="point_'+totalPoint+'">'+h2.text()+"</a></li>";

    var h3Length=h3.length;

    if(!h3Length){
        $(".innerMap").remove();
        return;
    }

    for(var n=0;n<h3Length;n++){
        totalPoint++;

        h3.eq(n).attr("id","point_"+totalPoint);

        str+='<li class="r1"><a class="_h3" data-link="point_'+totalPoint+'">'+h3.eq(n).text()+'</a></li>';

        var h4=h3.eq(n).nextAll("h4");
        
        var h4Length=h4.length;

        if(h4Length){

            if(h4.eq(0).text()!=h3.eq(n+1).nextAll("h4").eq(0).text()){

                for(var n2=0;n2<h4Length;n2++){

                    totalPoint++;

                    h4.eq(n2).attr("id","point_"+totalPoint);

                    str+='<li class="r2"><a class="_h4" data-link="point_'+totalPoint+'">'+h4.eq(n2).text()+'</a></li>';

                    if(h4.eq(n2).text()==h3.eq(n+1).prevAll("h4").eq(0).text()){
                        break;
                    }

                }
            }

        }

    }

    str+="</ul>";

    $(".innerMap").html(str);

    $(".innerMap a").on("click",function(){

        var link=$(this).attr("data-link");

        $("html").animate({
            scrollTop:$("#"+link).offset().top-120,
        },300);


    });

    var position={
        x:0,
        y:0,
    };
    var is_drag=false;

    var screenWidth=0;
    screenWidth=$(window).width();
    $(window).on("resize",function(){
        screenWidth=$(window).width();
    });


    $("html").on("mousemove",function(e){

        if(screenWidth <= 1400){

            position.x=e.originalEvent.pageX;
            position.y=e.originalEvent.pageY;
            
            if (is_drag === true) {
                var diff=position.x-screenWidth;
                if(diff >= -300 && diff <= 0){

                    var vetrol=Math.abs(position.x-$(window).width());

                    $(".innerMap").css({
                        right:(vetrol-350)+"px",
                    }).addClass("no_transition");

                }
            }

        }
    });

    $("html").on('mousedown', function() {
        if(screenWidth <= 1400){
            if(position.x >= screenWidth-350){
                console.log("down");
                is_drag = true;
            }
        }
    });
    
    $("html").on('mouseup mouseleave', function() {

        if(screenWidth <= 1400){
    
            if(is_drag==true){


                $(".innerMap").removeClass("no_transition");
                
                var diff=position.x-screenWidth;

                if(diff <= -150){
                    $(".innerMap").css({
                        right:0,
                    });        
                }
                else{
                    $(".innerMap").css({
                        right:"-350px",
                    });        
                }
            }

            is_drag = false;
        }


    });

});