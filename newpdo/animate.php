<!DOCTYPE html>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script>
  $(document).ready(function() {
  $("button").click(function(){
       $("#demo1").animate({fontSize: '3em'}, "slow");
      $("#demo1").toggle("slow"); $("#demo1").fadeOut("slow");
      
       $("#demo12").animate({fontSize: '3em'}, "slow");
      $("#demo12").toggle("slow"); $("#demo12").fadeOut("slow");
      
        $("#demo123").animate({fontSize: '3em'}, "slow");
      $("#demo123").toggle("slow"); $("#demo123").fadeOut("slow");
      
        $("#demo3").animate({fontSize: '3em'}, "slow");
      $("#demo3").toggle("slow");$("#demo3").fadeOut("slow");
      
          $("#demo4").animate({fontSize: '3em'}, "slow");
      $("#demo4").toggle("slow");
      $("#demo4").fadeOut("slow");
      
       $("#demo5").animate({fontSize: '3em'}, "slow");
      $("#demo5").toggle("slow"); $("#demo5").fadeOut("slow");
      
         $("#demo51").animate({fontSize: '3em'}, "slow");
      $("#demo51").toggle("slow"); $("#demo51").fadeOut("slow");
      
     $("#demo2").animate({left: '430px'},"slow");
      $("#demo2").animate({top: '410px'},"slow");
     $("#demo2").animate({fontSize: '3em'}, "slow");
     
    $("#myCanvas").toggle();$("#myCanvas").fadeOut();
    $("#myCanvas1").toggle(); $("#myCanvas1").fadeOut();
    $("#myCanvas2").toggle(); $("#myCanvas2").fadeOut();
    
     $("#Canvas").toggle();$("#Canvas").fadeOut();
    $("#Canvas1").toggle(); $("#Canvas1").fadeOut();
    $("#Canvas2").toggle(); $("#Canvas2").fadeOut();
   
  });
  });
</script>
 </head>
 
<style>
   .buioi{
                background-color: lightgreen;
                text-align: center;
                border-bottom: 6px solid red;
                border-radius: 12px;
                color: black;
            }

#anim {width: 20px; height: 20px; position: relative;     }
#container {
  width: 150px;
  height: 150px;
  position: absolute;
  background: yellow;
  
}
#animate {
  width: 50px;
  height: 50px;
  position: absolute;
  background-color: red; border: 1px solid black;
}
#animate2 {
  width: 50px;
  height: 50px;
  position: absolute ;

  background-color: red; border: 1px solid black;
}
#animate3 {
  width: 50px;
  height: 50px;
  position: absolute ;

  background-color: green; border: 1px solid black;
}
#animate4 {
  width: 50px;
  height: 50px;
  position: absolute;
  background-color: red; border: 1px solid black;
}
#animate5 {
  width: 50px;
  height: 50px;
  position: absolute ;

  background-color: red; border: 1px solid black;
}
#animate6 {
  width: 50px;
  height: 50px;
  position: absolute ;

  background-color: green; border: 1px solid black;
}
#animate7 {
  width: 50px;
  height: 50px;
  position: absolute;
  background-color: red; border: 1px solid black;
}
#animate8 {
  width: 50px;
  height: 50px;
  position: absolute;
  background-color: red;
   border: 1px solid black;
}
#animate9 {
  width: 50px;
  height: 50px;
  position: absolute; border: 1px solid black;
  background-color: red;
   border: 1px solid black;
}
#container {
  border-collapse: collapse;
}

 td, th,table {
  border: 1px solid black;
}
</style>
<body>
 

 <p id="value"></p>
<script>
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
</script>

<br>

   <table id="container">
   
  <tr>
    <td> <div id="animate">a<canvas id="myCanvas" width="50" height="50" style="border:1px solid #d3d3d3;"></canvas></div> <div id="animate4"> </div><div id="animate7">a3<canvas id="Canvas" width="50" height="50" style="border:1px solid #d3d3d3;"></canvas></div> </td>
   <td>  <div id ="animate2"></div> <div id="animate5"> a12<canvas id="myCanvas1" width="50" height="50" style="border:1px solid #d3d3d3;"></canvas><canvas id="Canvas1" width="50" height="50" style="border:1px solid #d3d3d3;"></canvas></div><div id="animate8"></div></td> 
   <td> <div id ="animate3">a2 <canvas id="Canvas2" width="50" height="50" style="border:1px solid #d3d3d3;"></canvas></div> <div id="animate6"> </div><div id="animate9">a22c<canvas id="myCanvas2" width="50" height="50" style="border:1px solid #d3d3d3;"></canvas></div></td>
  </tr>
 
 </table>
   <p id="demo5" style=" position: absolute" >  </p>
   <p id="demo51" style=" position: absolute" >  </p>  
 <p id="demo4" style="background-color: green; position: absolute" >  </p>  
<p id="demo3" style="background-color: green; position: absolute" >  </p>
<p id="demo1" style="background-color: green; position: absolute" >  </p>
<p id="demo12" style="background-color: green; position: absolute" >  </p>
<p id="demo123" style="background-color: green; position: absolute" >  </p>
<br><br> <p id="demo2" style="color: red; position: absolute" ></p>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<h1 class="buioi"; id="buioi";style=" width: auto"><button onclick="myMove();">Click Me</button></h1> 

<script>
 function display(x,y){
var c = document.getElementById("Canvas");
var ctx = c.getContext("2d");
ctx.beginPath();
ctx.lineWidth = 5;
ctx.lineCap = "butt";
ctx.moveTo(50, 0);
ctx.lineTo(x, y);
ctx.strokeStyle = "red";
ctx.closePath();
ctx.stroke();}

 function display1(x,y){
var c = document.getElementById("myCanvas1");
var ctx = c.getContext("2d");
ctx.beginPath();
ctx.lineWidth = 5;
ctx.lineCap = "butt";
ctx.moveTo(0, 0);
ctx.lineTo(x, y);
ctx.strokeStyle = "red";
ctx.closePath();
ctx.stroke();}

 function display2(x,y){
var c = document.getElementById("myCanvas2");
var ctx = c.getContext("2d");
ctx.beginPath();
ctx.lineWidth = 5;
ctx.lineCap = "round";
ctx.moveTo(0, 0);
ctx.lineTo(x, y);
ctx.strokeStyle = "red";
ctx.closePath();
ctx.stroke();}

</script>
<script>
 function displayno(x,y,k){
var c = document.getElementById("Canvas");
var ctx = c.getContext("2d");
ctx.beginPath();
ctx.lineWidth = k;
ctx.lineCap = "butt";
ctx.moveTo(50, 0);
ctx.lineTo(x, y);
ctx.strokeStyle = "black";
ctx.closePath();
ctx.stroke();}

 function display1no(x,y,k){
var c = document.getElementById("Canvas1");
var ctx = c.getContext("2d");
ctx.beginPath();
ctx.lineWidth = k;
ctx.lineCap = "butt";
ctx.moveTo(50, 0);
ctx.lineTo(x, y);
ctx.strokeStyle = "black";
ctx.closePath();
ctx.stroke();}

 function display2no(x,y,k){
var c = document.getElementById("Canvas2");
var ctx = c.getContext("2d");
ctx.beginPath();
ctx.lineWidth = k;
ctx.lineCap = "round";
ctx.moveTo(50, 0);
ctx.lineTo(x, y);
ctx.strokeStyle = "red";
ctx.closePath();
ctx.stroke();}

</script>
<script>

 
 function myMove() {
    // primi tre dadi
     var a = ["green","blue","pink","red"];
        
     var x = Math.floor(Math.random() * 4);
     switch(x){
  case 0 :
    a = a[x];
    break;
  case 1 :
    a = a[x];
    break;
  case 2 :
    a = a[x];
    break;
  case 3 :
    a = a[x];    
}
var b = 0;

    // secondo
       var a1= ["green","blue","pink","red"];
      
     var x1 = Math.floor(Math.random() * 4);
     switch(x1){
  case 0 :
    a1 = a1[x1];
    break;
  case 1 :
    a1 = a1[x1];
    break;
  case 2 :
    a1 = a1[x1];
    break;
  case 3 :
    a1 = a1[x1];    
}
var b1 = 0;

// terzo
    var a2 = ["green","blue","pink","red"];
      
     var x2 = Math.floor(Math.random() * 4);
     switch(x2){
  case 0 :
    a2 = a2[x2];
    break;
  case 1 :
    a2 = a2[x2];
    break;
  case 2 :
    a2 = a2[x2];
    break;
  case 3 :
    a2 = a2[x2];    
}
var b2 = 0;

// seconda liea di dadi
   var a3 = ["green","blue","pink","red"];
      
     var x3 = Math.floor(Math.random() * 4);
     switch(x3){
  case 0 :
    a3 = a3[x3];
    break;
  case 1 :
    a3 = a3[x3];
    break;
  case 2 :
    a3 = a3[x3];
    break;
  case 3 :
    a3 = a3[x3];    
}
var b3 = 50;

    // secondo
       var a12= ["green","blue","pink","red"];
    
     var x12= Math.floor(Math.random() * 4);
     switch(x12){
  case 0 :
    a12 = a12[x12];
    break;
  case 1 :
    a12 = a12[x12];
    break;
  case 2 :
    a12 = a12[x12];
    break;
  case 3 :
    a12 = a12[x12];    
}
var b12 = 50;

// terzo
    var a22 = ["green","blue","pink","red"];
      
     var x22 = Math.floor(Math.random() * 4);
     switch(x22){
  case 0 :
    a22 = a22[x22];
    break;
  case 1 :
    a22 = a22[x22];
    break;
  case 2 :
    a22 = a22[x22];
    break;
  case 3 :
    a22 = a22[x22];    
}

// terza liea di dadi
   var a3a = ["green","blue","pink","red"];
      
     var x3a = Math.floor(Math.random() * 4);
     switch(x3a){
  case 0 :
    a3a = a3a[x3a];
    break;
  case 1 :
    a3a = a3a[x3a];
    break;
  case 2 :
    a3a = a3a[x3a];
    break;
  case 3 :
    a3a = a3a[x3a];    
}


    // secondo
       var a12b= ["green","blue","pink","red"];
    
     var x12b= Math.floor(Math.random() * 4);
     switch(x12b){
  case 0 :
    a12b = a12b[x12b];
    break;
  case 1 :
    a12b = a12b[x12b];
    break;
  case 2 :
    a12b = a12b[x12b];
    break;
  case 3 :
    a12b = a12b[x12b];    
}



// terzo
    var a22c = ["green","blue","pink","red"];
      
     var x22c = Math.floor(Math.random() * 4);
     switch(x22c){
  case 0 :
    a22c = a22c[x22c];
    break;
  case 1 :
    a22c = a22c[x22c];
    break;
  case 2 :
    a22c = a22c[x22c];
    break;
  case 3 :
    a22c = a22c[x22c];    
}

//prima sezione

  var elem = document.getElementById("animate");
  var elem1 = document.getElementById("animate2");
  var elem2 = document.getElementById("animate3");
  // seconda  sezione
   var elem3 = document.getElementById("animate4");
  var elem4 = document.getElementById("animate5");
  var elem5 = document.getElementById("animate6");
  // terza sezione
    var elem6 = document.getElementById("animate7");
  var elem7 = document.getElementById("animate8");
  var elem8 = document.getElementById("animate9");
  var pos = 0;
  
  var id = setInterval(frame, 2);
 var id1 = setInterval(frame, 30);
 var id2 = setInterval(frame, 400);
  var id3 = setInterval(frame, 2);
 var id4 = setInterval(frame, 30);
 var id5 = setInterval(frame, 400);
   var id6 = setInterval(frame, 2);
 var id7 = setInterval(frame, 30);
 var id8 = setInterval(frame, 400);

 // funzione base
 var u = 0;
 function base (u,pos,elem,color,ide)
{
    if (pos == u ) {
      clearInterval(ide);
      
     pos++;
      elem.style.top= pos + "px";
     
      elem.style.backgroundColor = color ;
    
    }

}
 //inzio functin  function frame() {

  function premia1(m,g,h,t,x,y){
 if (g == h && h == t && g == t){
  add();add();add(); add();
  var result = 10*m;
  document.getElementById("demo1").style.backgroundColor = g;
  document.getElementById("demo1").style.top = x +"px";
   document.getElementById("demo1").style.left = y + "px";
  document.getElementById("demo1").innerHTML = " WIN " + result;
  
 }
 //else{ document.getElementById("demo1").innerHTML = "" ;}
}
  function premia12(m,g,h,t,x,y){
 if (g == h && h == t && g == t){
  add();add();add(); add();add();
  var result = 10*m;
  document.getElementById("demo12").style.backgroundColor = g;
  document.getElementById("demo12").style.top = x +"px";
   document.getElementById("demo12").style.left = y + "px";
  document.getElementById("demo12").innerHTML = " WIN " + result;
  
 }
 //else{ document.getElementById("demo1").innerHTML = "" ;}
}
  function premia123(m,g,h,t,x,y){
 if (g == h && h == t && g == t){
  add();add();add(); add(); add();add();
  var result = 10*m;
  document.getElementById("demo123").style.backgroundColor = g;
  document.getElementById("demo123").style.top = x +"px";
   document.getElementById("demo123").style.left = y + "px";
  document.getElementById("demo123").innerHTML = " WIN " + result;
  
 }
 //else{ document.getElementById("demo1").innerHTML = "" ;}
}
  function premia1d(m,g,h,t){
 if (g == h && h == t && g == t){
  add();add();add();add();add();add();add();add();add();add();add();add();add();add();
 var resulto = 10 * m ;
  document.getElementById("demo5").style.backgroundColor = g;
  document.getElementById("demo5").style.top = 200 + "px";
   document.getElementById("demo5").style.left = 450 + "px";
  document.getElementById("demo5").innerHTML = " bigWIN" + resulto ;
   //display();display1(); display2();
 }
//else{ document.getElementById("demo5").innerHTML = "last big win"  ;}
}
function premia1d1(m,g,h,t){
 if (g == h && h == t && g == t){
  add();add();add();add();add();add();add();add();add();add();add();add();add();add();add();add();
 var resulto = 10 * m ;
  document.getElementById("demo51").style.backgroundColor = g;
  document.getElementById("demo51").style.top = 100 + "px";
   document.getElementById("demo51").style.left = 450 + "px";
  document.getElementById("demo51").innerHTML = " bigWIN" + resulto ;
  
 }
//else{ document.getElementById("demo5").innerHTML = "last big win"  ;}
}
 function premia(m,g,h,x){
 if (g == h && g == "green" || g == h && g == "red"){
  add();
  var result = 10 * m;
 document.getElementById("demo3").style.top = x + "px";
  document.getElementById("demo3").style.backgroundColor ="yellow";
  document.getElementById("demo3").style.color = g;
   
  document.getElementById("demo3").innerHTML = "WIN " + result;
 }

}
function nonpremia(a,a1,a3,a12,a3a,a12b){
 if(a != a1 || a3 != a12 || a3a != a12b){
  document.getElementById("demo4").style.top = 450 + "px";
  document.getElementById("demo4").style.backgroundColor ="yellow";
  document.getElementById("demo4").innerHTML = "lose-30" ;
 }
 //else { document.getElementById("demo1").style.backgroundColor = "green";}
}

 function casi(){
  
document.getElementById("demo1").innerHTML = "";

 }
  function casi1(){
  
document.getElementById("demo12").innerHTML = "";

 }
  function casi2(){
  
document.getElementById("demo123").innerHTML = "";

 }
 function bigwin_cancel(){
  document.getElementById("demo5").innerHTML ="";
 }
  function bigwin_cancel1(){
  document.getElementById("demo51").innerHTML ="";
 }
 function frame() {
sot();sot();sot();

 

//document.getElementById("demo2").innerHTML = "TOT WINING " + count() ;
 //prima linea -------------------------------------------->

   base(0,0,elem,a,id);     
   base(0,0,elem1,a1,id1);
    base(0,0,elem2,a2,id2);
    if(a == a1){premia(1,a,a1,200);} else {nonpremia(a,a1,a3,a12,a3a,a12b); casi(); }
    if (a == a1 && a1 == a2 ) {premia1(4,a,a1,a2,-15,170);}else{ nonpremia(a,a1,a3,a12,a3a,a12b); casi();}
 
    //sewconda linea--------------------------------------------->
   
    base(50,50,elem3,a3,id3);
    base(50,50,elem4,a12,id4);
    base(50,50,elem5,a22,id5);
    if(a3 == a12){ premia(1,a3,a12,250); }else{ nonpremia(a,a1,a3,a12,a3a,a12b); casi1();}
    if (a3 == a12 && a12 == a22){ premia12(5,a3,a12,a22,30,170); }else{ nonpremia(a,a1,a3,a12,a3a,a12b); casi1();}
    // terzo linea ---------------------------------------->
   
    base(100,100,elem6,a3a,id6);
    base(100,100,elem7,a12b,id7);
    base(100,100,elem8,a22c,id8);
    if( a3a == a12b ){ premia(1,a3a,a12b,350);}else{ nonpremia(a,a1,a3,a12,a3a,a12b); casi2();}
    if (a3a == a12b && a12b == a22c){premia123(6,a3a,a12b,a22c,80,170); }else{ nonpremia(a,a1,a3,a12,a3a,a12b); casi2();}
    
  
    
   if (a == a12 && a12 == a22c){premia1d(14,a,a12,a22c);display(50,50,5);display1(50,50,5);display2(150,150,15);}else { bigwin_cancel();
   
   }
    if (a3a == a12 && a12 == a2 ) { premia1d1(16,a3a,a12,a2);displayno(0,50,5);display1no(0,50,5);display2no(0,50,5);} else {bigwin_cancel1();}
    
 //nonpremia(a,a1,a3,a12,a3a,a12b);
//	document.getElementById("demo").innerHTML= a3 + " " + a12 + " " + a22 + " " +  result;

var stop = count();
document.getElementById("demo2").innerHTML = "TOT WINING " + stop ;
if (stop <-300 ){document.getElementById("demo2").innerHTML = "Stop loose" + stop;}
if (stop > 300 ){document.getElementById("demo2").innerHTML = "Stop WIN" + stop ;}
  }


}

</script>
<br>

</body>
</html>