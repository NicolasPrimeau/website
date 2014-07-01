$(document).ready(function(){
    $(".component-picker").append("<form class='component-form'></form>");
    $(".component-picker form").append("<label>Select an option: </label>");
    $(".component-picker form").append("<select class='current-component'></select>");
    $(".current-component").append("<option selected='selected' class='place-holder' disabled>Pick an option</option>");
    
    var length = $(".component-picker ul li").children().length;   
    var text,value;
    for(var i =0;i<length;i++){
        text = $($(".component-picker ul li").children()[0]).html();
        value = $($(".component-picker ul li").children()[0]).attr("href");
        $($(".component-picker ul li").children()[0]).remove();
        $(".current-component").append("<option value='"+ value +"'>"+text+"</option>");   
    }
    var file;
    $(".current-component").change(function(){
        $(".place-holder").removeAttr("selected");
        $(".item-js.code-item").addClass("to-delete");
        var time = 300;
        if($(".item-js.code-item").html() === ""){
            time = 0;
        }
        $(".item-js.code-item").fadeOut(time,function(){
            if($(".wrapper").hasClass("hasVerticalScroll")){
              $('.main-content').css('padding-right', '16px');
            }
            $(".item-js.code-item.to-delete").replaceWith("<li class='item-js code-item'></li>");
            $(".item-js.code-item").append("<div class='code'></div>");
            $(".item-js.code-item .code").append("<h3>"+$(".current-component option:selected").html()+"</h3>").fadeIn(200);
            /*jQuery.get($(".current-component option:selected").val()+".txt",function(element){
                 file = element.replace(/\n/g, '<br />');
                 $(".item-js.code-item .code h3").after("<p class='description'>"+file+"</p>").fadeIn(200); 
            });*/ 
            $(".item-js.code-item .code").append("<a href='"+$(".current-component option:selected").val()+"' download='"+$(".current-component option:selected").html()+"*'> Download file</a>").fadeIn(200);
            var id = $(".current-component option:selected").val();
            if(id.substr(id.length - 5)!= ".html"){
              jQuery.get($(".current-component option:selected").val(),function(element){
                 file = element.replace(/\t/g, '\u00a0\u00a0\u00a0\u00a0');
                 file = file.replace(/ /g, '\u00a0');
                 file = file.replace(/\n/g, '<br />');
                 $(".item-js.code-item .code").append("<p class='true-code'>"+file+"</p>").fadeIn(200, function(){
                             if($(".wrapper").height() > $(window).height()){
                                 $('.wrapper').addClass("hasVerticalScroll"); 
                              } else{
                                 $('.wrapper').removeClass("hasVerticalScroll");  
                              }
                              $('.main-content').css("padding-right", "0px");
                 });  
              
              });
          }else{
            jQuery.get($(".current-component option:selected").val(),function(element){
                 file = element.replace(/\t/g, '\u00a0\u00a0\u00a0\u00a0');
                 $(".item-js.code-item .code").append("<p class='true-code'>"+file+"</p>").fadeIn(200, function(){
                             if($(".wrapper").height() > $(window).height()){
                                 $('.wrapper').addClass("hasVerticalScroll"); 
                              } else{
                                 $('.wrapper').removeClass("hasVerticalScroll");  
                              }
                              $('.main-content').css("padding-right", "0px");
                 });  
              
              });
          }
        });
    });
    
});


