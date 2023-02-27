<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" defer>
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

    </script>
    <link rel="stylesheet" href="coba.css">
    <title></title>
  </head>
  <body>
    <h1>Horizontal Slider</h1>
<h4>En desarollo</h4>
<hr />
<div class="horizontal-slider">
  <ul class="h-items">
    <li>1</li>
    <li>2</li>
    <li>3</li>
  </ul>
  <div class="h-controlls">
    <span class="prev">
    <i class="fa fa-chevron-left" aria-hidden="true"><</i>
    </span>
    <span class="next">
    <i class="fa fa-chevron-right" aria-hidden="true">></i>
    </span>
  </div>
</div>
  </body>
</html>
