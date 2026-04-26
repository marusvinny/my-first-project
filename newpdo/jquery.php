

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#div1").fadeIn();
    $("#div2").fadeIn("slow");
    $("#div3").fadeIn(3000);
     $("#div4").fadeIn();
    $("#div5").fadeIn("slow");
    $("#div6").fadeIn(3000);
    $("#demo8").fadeIn(3000);
  });
});

</script>
<script> 
$(document).ready(function(){
  $("button").click(function(){
    $("#demo1").animate({left: '350px'});
     $("#demo1").animate({fontSize: '3em'}, "slow");
    $("#demo2").animate({left: '350px'});
     $("#demo2").animate({fontSize: '3em'}, "slow");
     $("#demo3").animate({left: '650px'});
       $("#demo3").animate({fontSize: '3em'}, "slow");
     $("#demo4").animate({left: '950px'});
       $("#demo4").animate({fontSize: '3em'}, "slow");
        $("#demo8").animate({left: '850px'},"slow");
       $("#demo8").animate({fontSize: '3em'}, "slow");
       $("#demo8").animate({height: '300px', opacity: '0.4'}, "slow");
    $("#demo8").animate({width: '300px', opacity: '0.8'}, "slow");
    $("#demo8").animate({height: '100px', opacity: '0.4'}, "slow");
    $("#demo8").animate({width: '100px', opacity: '0.8'}, "slow");
     
  });
});
</script>
<script>
 $(document).ready(function() {
  $("button").click(function(){
      $("#demo8").animate({right: '850px'},"slow");
       $("#demo8").animate({fontSize: '3em'}, "slow");
  });
  });
</script>
</head>
<body>

<p id="demo">Demonstrate fadeIn() with different parameters.</p> <br>
<p id="demo1"></p>


<button onclick="marus();">Click to fade in boxes</button><br><br>
<script>
 document.getElementById("demo").innerHTML="start";
      var add = (function () {
  var counter = 0;
  return function () {counter += 10 ;
  return counter ;}
})();
 
            var sot = (function () {
  var counter = 0;
  return function () {counter -= 10 ;
  return counter ;}
})();
    var count = (function () {
  var counter = 0;
  return function () {counter =   add() + sot();
  
  return counter ;}
})();
  function marus(){
    
    // creazione di numerri casuali random
    var div0 = Math.floor(Math.random() * 4);
        var div1 = Math.floor(Math.random() * 4);
         var div2 = Math.floor(Math.random() * 4);
        var div3 = Math.floor(Math.random() * 4);
         var div4 = Math.floor(Math.random() * 4);
        var div5 = Math.floor(Math.random() * 4);
       // creazione  di arrai che contengono  i colori 
     var a = ["green","blue","pink","yellow"];
     var b = ["green","blue","pink","yellow"];
     var c = ["green","blue","pink","yellow"];
     var d = ["green","blue","pink","yellow"];
       var e = ["green","blue","pink","yellow"];
     var f= ["green","blue","pink","yellow"];
     // funzione di incremento
 
     // Funzioni switch per asegnazione di colore backgoud determinato dal indice random
switch(div0){
  case 0 :
    a = a[div0];
    break;
  case 1 :
    a = a[div0];
    break;
  case 2 :
    a = a[div0];
    break;
  case 3 :
    a = a[div0];
    
    
}
switch(div1){
  case 0 :
    b = b[div1];
    break;
  case 1 :
    b = b[div1];
    break;
  case 2 :
    b = b[div1];
    break;
  case 3 :
    b = b[div1];
      
}
switch (div2){
  case 0:
    c = c[div2];
    break ;
  case 1 :
    c = c[div2];
    break;
  case 2:
    c = c[div2];
    break ;
  case 3 :
    c = c[div2];  
}

switch(div3){
  case 0 :
    d = d[div3];
    break;
  case 1 :
    d = d[div3];
    break;
  case 2 :
    d = d[div3];
    break;
  case 3 :
    d =  d[div3];
}
switch(div4){
  case 0:
    e = e[div4];
    break;
  case 1 :
    e = e[div4];
    break ;
  case 2 :
    e = e[div4];
    break;
  case 3 :
    e = e[div4];
}
switch(div5){
  case 0:
    f = f[div5];
    break;
  case 1 :
    f = f[div5];
    break;
  case 2 :
    f = f[div5];
    break;
  case 3 :
    f = f[div5] ;
  
}

if (a == d ){
 
  add();
  add();
  add();
  add();
  document.getElementById("demo2").innerHTML= "win" + " " + "<b> +40 </b>";
  document.getElementById("demo2").style= "position:absolute";
  document.getElementById("demo2").style.color="red";
}else
{
 sot(); sot(); 
  document.getElementById("demo2").innerHTML= "Lose" + " " + "<b>-20</b>" ;
 document.getElementById("demo2").style= "position:absolute";
}
if ( b == e){
  add();
  add();
  add();
  document.getElementById("demo3").innerHTML = "win" + " " + "<b> + 30 </b>";
  document.getElementById("demo3").style= "position:absolute";
  document.getElementById("demo3").style.color="red";
}
else{
  sot(); 
  document.getElementById("demo3").innerHTML= "Lose" + " " + "<b> -10 </b>" ;
  document.getElementById("demo3").style= "position:absolute";
}
if ( c == f){
  add();
  add();
  document.getElementById("demo4").innerHTML = "win" + " " + "<b> +20 </b>";
  document.getElementById("demo4").style= "position:absolute";
  document.getElementById("demo4").style.color = "red";
}
else{
  sot();
  document.getElementById("demo4").innerHTML= "Lose" + " " + "<b> -10 </b>";
  document.getElementById("demo4").style= "position:absolute";
}

if(a==e && e==c){
 add(); add(); add(); add(); add(); add(); add(); add();
  add(); add(); add(); add(); add(); add(); add(); add();
 document.getElementById("demo8").style ="position:absolute";
 document.getElementById("demo8").style.backgroundColor = a;
}else
{
 document.getElementById("demo8").style.display="none";
document.getElementById("demo8").style.position ="toggle";
document.getElementById("demo8").style.backgroundColor = "wite";
}



     document.getElementById("demo").innerHTML= Math.floor(Math.random() * 3) + " " + a;
     //determina colore  e posizione del totale vincita
     if (count() > 0){
     document.getElementById("demo1").innerHTML= " Tot Won " + " " + count();
      document.getElementById("demo1").style= "position:absolute";
  document.getElementById("demo1").style.color = "red";
     }
     else{
       document.getElementById("demo1").innerHTML= " you are  Losing " + " " + count();
        document.getElementById("demo1").style= "position:absolute";
  document.getElementById("demo1").style.color = "black";
     }
   document.getElementById("div1").style.backgroundColor = a;
   document.getElementById("div2").style.backgroundColor = b;
   document.getElementById("div3").style.backgroundColor = c;
    document.getElementById("div4").style.backgroundColor = d;
   document.getElementById("div5").style.backgroundColor = e;
   document.getElementById("div6").style.backgroundColor = f;
  }
  
</script>
<br><br>
<table>
  <tr>
<td><div id="div1" style="width:80px;height:80px;display:none;background-color:red;"><p id="demo2"></p></div><br></td>
<td><div id="div2" style="width:80px;height:80px;display:none;background-color:green;"><p id="demo3"></p></div><br></td>
<td><div id="div3" style="width:80px;height:80px;display:none;background-color:blue;"><p id="demo4"></p></div><br></td>
  </tr>
<br>
  <tr>
<td><div id="div4" style="width:80px;height:80px;display:none;background-color:red;"></div><br></td>
<td><div id="div5" style="width:80px;height:80px;display:none;background-color:green;"></div><br></td>
<td><div id="div6" style="width:80px;height:80px;display:none;background-color:blue;"></div><br></td>
  </tr>
</table>
<br><br>
<div id="demo8" style="width:80px;height:80px;display:none;background-color:blue;">+160</div>

    


</body>
</html>