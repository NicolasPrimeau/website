$(document).ready(function(){
  $(".unit-picker").change(function(){
    $(".place-holder").removeAttr("selected");
    var id = $(".unit-picker option:selected").val();
    window.location= window.location.pathname+id;
  });


});
