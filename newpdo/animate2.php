
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
      $("#demo2").animate({top: '480px'},"slow");
     $("#demo2").animate({fontSize: '3em'}, "slow");
     
     $("#premia").animate({fontSize:'3em'},'slow');
    $("#premia").toggle();$("#premia").fadeOut();
    $("#premia1").animate({fontSize:'3em'},'slow');
    $("#premia1").toggle(); $("#premia1").fadeOut();
    /*
        $("#animatep").animate({fontSize:'3em'},'slow');
    $("#animatep").toggle(); $("#animatep").fadeOut('slow');
    
     $("#Canvas").toggle();$("#Canvas").fadeOut();
    $("#Canvas1").toggle(); $("#Canvas1").fadeOut();
    $("#Canvas2").toggle(); $("#Canvas2").fadeOut();
    */
   
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
  width: 300px;
  height: 300px;
  position: absolute;
  background: yellow;
  
}
#animate {
  width: 100px;
  height: 100px;
  position: absolute;
  background-color: red; border: 1px solid black;
}
#animate2 {
  width: 100px;
  height: 100px;
  position: absolute ;

  background-color: red; border: 1px solid black;
}
#animate3 {
  width: 100px;
  height: 100px;
  position: absolute ;

  background-color: green; border: 1px solid black;
}
#animate4 {
  width: 100px;
  height: 100px;
  position: absolute;
  background-color: red; border: 1px solid black;
}
#animate5 {
  width: 100px;
  height: 100px;
  position: absolute ;

  background-color: red; border: 1px solid black;
}
#animate6 {
  width: 100px;
  height: 100px;
  position: absolute ;

  background-color: green; border: 1px solid black;
}
#animate7 {
  width: 100px;
  height: 100px;
  position: absolute;
  background-color: red; border: 1px solid black;
}
#animate8 {
  width: 100px;
  height: 100px;
  position: absolute;
  background-color: red;
   border: 1px solid black;
}
#animate9 {
  width: 100px;
  height: 100px;
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

</head>
<script>

function setCookie(cname,cvalue,exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  var user=getCookie("username");
  if (user != "") {
   
    alert("Welcome again " + user );
    
  } else {
     user = prompt("Please enter your name:","");
   
     if (user != "" && user != null) {
       setCookie("username", user, 30);
     }
  }
}

</script>
<body  onload="checkCookie();">
 <?php  $_SESSION["result"]= "Winner" ; ?>
<?php  $_SESSION["result1"]= "Loser" ; ?>
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
  
  return counter ;
  }
})();
</script>

<br>

   <table id="container">
   
  <tr id="canvas">
    <td > <img  id="animate"> <img id="animate4"><img id="animate7"> </td>
   <td>  <img id="animate2" > <img id="animate5"><img id="animate8"></td> 
   <td> <img id ="animate3"> <img id="animate6"><img id="animate9"> </td>
  </tr>
 
 </table>
   
   <p  class="buioi" id="premia" style="position: absolute"></p><p  class="buioi" id="premia1" style="position: absolute"></p>
   <p  class="buioi" id="demo5" style="position: absolute"></p>
   <p  class="buioi" id="demo51" style=" position: absolute" >  </p>  
 <p class="buioi" id="demo4" style="background-color: green; position: absolute" >  </p>  
<p class="buioi" id="demo3" style="background-color: green; position: absolute" >  </p>
<p class="buioi" id="demo1" style="background-color: green; position: absolute" >  </p>
<p class="buioi" id="demo12" style="background-color: green; position: absolute" >  </p>
<p  class="buioi" id="demo123" style="background-color: green; position: absolute" >  </p>
<br><br> <p class="buioi" id="demo2" style="color: red; position: absolute" > </p>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<h1 class="buioi"; id="buioi";style=" width: auto"><button onclick="myMove();"  style=" width: 600px; border-bottom: 8px solid blue;
                border-radius: 12px;"  type="button"><b>SPIN</b></button></h1> 


<script>

 
 function myMove() {
 
    // primi tre dadi
     var a = ["picche.jpg","fiori.jpg","cuori.jpg","quadri.jpg"];
        
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
       var a1= ["picche.jpg","fiori.jpg","cuori.jpg","quadri.jpg"];
      
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
    var a2 = ["picche.jpg","fiori.jpg","cuori.jpg","quadri.jpg"];
      
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
   var a3 = ["picche.jpg","fiori.jpg","cuori.jpg","quadri.jpg"];
      
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

    // secondo2
       var a12= ["picche.jpg","fiori.jpg","cuori.jpg","quadri.jpg"];
    
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
    var a22 = ["picche.jpg","fiori.jpg","cuori.jpg","quadri.jpg"];
      
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
   var a3a = ["picche.jpg","fiori.jpg","cuori.jpg","quadri.jpg"];
      
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
       var a12b= ["picche.jpg","fiori.jpg","cuori.jpg","quadri.jpg"];
    
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



// terzo3
    var a22c = ["picche.jpg","fiori.jpg","cuori.jpg","quadri.jpg"];
      
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

 //var u = 0;
 function base (u,pos,elem,color,ide)
{
    if (pos == u ) {
      clearInterval(ide);
      
     pos++;
      elem.style.top= pos + "px";
     
      //elem.style.backgroundColor = color ;
    elem.src=color;
    }

}

 //inzio functin  function frame() {

  function premia1(m,g,h,t,x,y){
 if (g == h && h == t && g == t){
  add();add();add(); add();add();add();
  var result = 10*m;
  document.getElementById("demo1").style.backgroundColor = "red";
  document.getElementById("demo1").style.top = x +"px";
   document.getElementById("demo1").style.left = y + "px";
  document.getElementById("demo1").innerHTML = " WIN " + result;
  
 }
 //else{ document.getElementById("demo1").innerHTML = "" ;}
}
  function premia12(m,g,h,t,x,y){
 if (g == h && h == t && g == t){
  add();add();add(); add();add();add();add();
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
  add();add();add(); add(); add();add();add();add();
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
  add();add();add();add();add();add();add();add();add();add();add();add();add();add();add();add();add();add();add();add();
  add();add();add();add();add();add();add();add();add();add();
 var resulto = 10 * m ;
 
  document.getElementById("demo5").style.backgroundColor = "red";
  document.getElementById("demo5").style.top = 250 + "px";
   document.getElementById("demo5").style.left = 340 + "px";
  document.getElementById("demo5").innerHTML = "<b> bigWIN </b>" + " ==> " + resulto  ;
 
  
 }
//else{ document.getElementById("demo5").innerHTML = "last big win"  ;}
}
function premia1d1(m,g,h,t){
 if (g == h && h == t && g == t){
  add();add();add();add();add();add();add();add();add();add();add();add();add();add();add();add();add();add();add();add();
  add();add();add();add();add();add();add();add();add();add();
 var resulto = 10 * m ;
  document.getElementById("demo51").style.backgroundColor = "green";
  document.getElementById("demo51").style.top = 0 + "px";
   document.getElementById("demo51").style.left = 340 + "px";
  document.getElementById("demo51").innerHTML = "<b> bigWIN</b>" + " ==> " +  resulto ;
  
 }
//else{ document.getElementById("demo5").innerHTML = "last big win"  ;}
}
 function premia(m,g,h,x){
 if (g == h && g == "picche.jpg" || g == h && g == "cuori.jpg"){
  add();
  var result = 10 * m;
 document.getElementById("demo3").style.top = x + "px";
  document.getElementById("demo3").style.backgroundColor ="yellow";
  document.getElementById("demo3").style.color = "black";
   
  document.getElementById("demo3").innerHTML = "WIN " + result;
 }

}
 function premia_premia1(m,g,h,x){
 if (g == h && g == "picche.jpg" || g == h && g == "cuori.jpg"){
  add();
  var result = 10 * m;
 document.getElementById("premia").style.top = x + "px";
  document.getElementById("premia").style.backgroundColor ="yellow";
  document.getElementById("premia").style.color = "black";
   
  document.getElementById("premia").innerHTML = "WIN " + result;
 }

}
 function premia_premia2(m,g,h,x){
 if (g == h && g == "picche.jpg" || g == h && g == "cuori.jpg"){
  add();
  var result = 10 * m;
 document.getElementById("premia1").style.top = x + "px";
  document.getElementById("premia1").style.backgroundColor ="yellow";
  document.getElementById("premia1").style.color = "black";
   
  document.getElementById("premia1").innerHTML = "win  " + result;
 }

}
function cancel_premia()
{
    document.getElementById("demo3").innerHTML= "";
}
function cancel_premia1()
{
    document.getElementById("premia").innerHTML= "";
}
function cancel_premia2()
{
    document.getElementById("premia1").innerHTML= "";
}
function nonpremia(a,a1,a3,a12,a3a,a12b){
 if(a != a1 || a3 != a12 || a3a != a12b){
  document.getElementById("demo4").style.top = 450 + "px";
  document.getElementById("demo4").style.backgroundColor ="yellow";
  document.getElementById("demo4").innerHTML = "lose-50" ;
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

 function ridirect(){
  window.location.replace("animate2.php");
 }
 sot();sot();sot();sot();sot();
 function frame() {


   base(0,0,elem,a,id);     
   base(0,0,elem1,a1,id1);
    base(0,0,elem2,a2,id2);
    if(a == a1){premia(2,a,a1,-5);} else {nonpremia(a,a1,a3,a12,a3a,a12b); casi();cancel_premia(); }
    if (a == a1 && a1 == a2 ) {premia1(6,a,a1,a2,-5,170);}else{ nonpremia(a,a1,a3,a12,a3a,a12b); casi();}
 
    //sewconda linea--------------------------------------------->
   
    base(100,100,elem3,a3,id3);
    base(100,100,elem4,a12,id4);
    base(100,100,elem5,a22,id5);
    if(a3 == a12){  premia_premia1(3,a3,a12,100); }else{ nonpremia(a,a1,a3,a12,a3a,a12b); casi1();cancel_premia1();}
    if (a3 == a12 && a12 == a22){ premia12(7,a3,a12,a22,100,170); }else{ nonpremia(a,a1,a3,a12,a3a,a12b); casi1();}
    // terzo linea ---------------------------------------->
   
    base(200,200,elem6,a3a,id6);
    base(200,200,elem7,a12b,id7);
    base(200,200,elem8,a22c,id8);
    if( a3a == a12b ){  premia_premia2(4,a3a ,a12b,200);}else{ nonpremia(a,a1,a3,a12,a3a,a12b); casi2(); cancel_premia2(); }
    if (a3a == a12b && a12b == a22c){premia123(8,a3a,a12b,a22c,200,170); }else{ nonpremia(a,a1,a3,a12,a3a,a12b); casi2();}

    
   if (a == a12 && a12 == a22c){ premia1d(30,a,a12,a22c);  }else{bigwin_cancel();}
   
   
    if (a3a == a12 && a12 == a2 ) { premia1d1(30,a3a,a12,a2);}else {bigwin_cancel1();}
    
 //nonpremia(a,a1,a3,a12,a3a,a12b);
//	document.getElementById("demo").innerHTML= a3 + " " + a12 + " " + a22 + " " +  result;
 //var stop = count();
  // total_win(stop);
  var stop = count();
  
document.getElementById("demo2").innerHTML = "TOT WINNING " + stop ;
if (stop <-300 ){document.getElementById("demo2").innerHTML = "Stop LOSE" + stop; alert("YOU LOSE"+ stop);  ridirect(); }
if (stop > 300 ){document.getElementById("demo2").innerHTML = "Stop WIN" + stop ; alert("YOU Won" + stop);  ridirect();}
  
  }

}


</script>


<br>

</body>
</html>