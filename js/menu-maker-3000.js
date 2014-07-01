$(document).ready(function(){
     if($(".wrapper").height() > $(window).height()+10){
        $('.wrapper').addClass("hasVerticalScroll"); 
     }
    
    $(".nav-menu .local-nav-item").hover(function(){
       $(this).addClass("hovering");
       $(".nav-menu .hovering .local-nav-sub-item").removeClass("hidden");
       $(".nav-menu .hovering .local-nav-sub").removeClass("hidden");
    }, function(){
        if(!$(".nav-menu .hovering .local-nav-sub").hasClass("hover")){
           $(".nav-menu .hovering .local-nav-sub-item").addClass("hidden");
           $(".nav-menu .hovering .local-nav-sub").addClass("hidden");
           $(this).removeClass("hovering");
        }
    });
    
    var first = $(location).attr('pathname');
    if($(location).attr('pathname') === "/"){
        first = "blog";
    }else{
        first.indexOf(1);
        first.toLowerCase();
        first = first.split("/")[1];  
    }
    $(".nav-menu .local-nav-item").removeClass("selected");
    $(".nav-menu .local-nav-item."+first).addClass("selected");

    $(document).scroll(function() {
      if($(document).scrollTop()> 200){
          $("a.up-arrow").fadeIn(500);
      }else if ($(document).scrollTop()<= 200){
            $("a.up-arrow").fadeOut(500);
      }
    });
    
});



