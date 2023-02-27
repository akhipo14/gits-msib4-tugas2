var hsuma = 0;
$(document).ready(function(){
  $(".next").click(function(){
    hsuma += -100;
    if(hsuma>=-200)
    $(".h-items").animate({marginLeft:hsuma+"%"},"fast");
    else{
      hsuma = 0;
      $(".h-items").animate({marginLeft:hsuma+"%"},"fast");
    }
  });


  $(".prev").click(function(){
    if(hsuma==0){
      hsuma = -200;
      $(".h-items").animate({marginLeft:hsuma+"%"},"fast");
    }
    else{
      hsuma += 100;
      $(".h-items").animate({marginLeft:hsuma+"%"},"fast");
    }
  });
});
