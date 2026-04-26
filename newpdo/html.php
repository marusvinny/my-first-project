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
      $("#demo2").animate({top: '400px'},"slow");
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
<style> 
#rotate3D {
  width: 100px;
  height: 100px;
  background: red;
  -webkit-transition: width 200000s; /* Safari */
  
}

#rotate2D {
  width: 100px;
  height: 100px;
  background: green;
  -webkit-transition: width 200000s; /* Safari */
  
}




<link rel="stylesheet" type="text/css" href="/browserref.css">
<style> 
#rotate2D,#rotate3D {
    width: 80px;
    height: 70px;
    color: white;
    position:relative;
    font-weight:bold;
    font-size:15px;
    padding:10px;
    float:left;
    margin-right:50px;
    border-radius:5px;
    border:1px solid #000000;
    background:red;
    margin:10px;
}
</style>
<style>
   .buioi{
                background-color: lightgreen;
                text-align: center;
                border-bottom: 6px solid red;
                border-radius: 12px;
                color: black;
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
<script>
function clickCounter() {
  if (typeof(Storage) !== "undefined") {
    if (sessionStorage.clickcount) {
      sessionStorage.clickcount = Number(sessionStorage.clickcount)+1 ;
    } else {
      sessionStorage.clickcount = 1;
    }
    document.getElementById("result").innerHTML =  "You have play the game " + sessionStorage.clickcount + " time(s) in this session." ;
  } else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
  }
}
</script>
<body  style=" background-color: blue"; onload="checkCookie(); clickCounter();" >
 <b><p id="result"></p></b>
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
  window.location.replace("html.php");
 }

<!--

var x,y,n=0,ny=0,rotINT,rotYINT
/*function rotateDIV()
{
x=document.getElementById("rotate2D")
clearInterval(rotINT)
rotINT=setInterval("startRotate()",10)
}*/


function rotateYDIV()
{
     sot();sot();sot();sot();sot();
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

y=document.getElementById("rotate3D")
y1=document.getElementById("rotate3D1")
y2=document.getElementById("rotate3D2")
y3=document.getElementById("rotate3D3")
y4=document.getElementById("rotate3D4")
y5=document.getElementById("rotate3D5")
y6=document.getElementById("rotate3D6")
y7=document.getElementById("rotate3D7")
y8=document.getElementById("rotate3D8")

y.src=a
y1.src=a1
y2.src=a2
y3.src=a3
y4.src=a12
y5.src=a22
y6.src=a3a
y7.src=a12b
y8.src=a22c
if(a == a1){premia(2,a,a1,-5);} else {nonpremia(a,a1,a3,a12,a3a,a12b); casi(); cancel_premia(); }
    if (a == a1 && a1 == a2 ) {premia1(6,a,a1,a2,-5,170);}else{ nonpremia(a,a1,a3,a12,a3a,a12b); casi();}
 if(a3 == a12){  premia_premia1(3,a3,a12,100); }else{ nonpremia(a,a1,a3,a12,a3a,a12b); casi1();cancel_premia1();}
    if (a3 == a12 && a12 == a22){ premia12(7,a3,a12,a22,100,170); }else{ nonpremia(a,a1,a3,a12,a3a,a12b); casi1();}
     if( a3a == a12b ){  premia_premia2(4,a3a ,a12b,200);}else{ nonpremia(a,a1,a3,a12,a3a,a12b); casi2(); cancel_premia2(); }
    if (a3a == a12b && a12b == a22c){premia123(8,a3a,a12b,a22c,200,170); }else{ nonpremia(a,a1,a3,a12,a3a,a12b); casi2();}
    if (a == a12 && a12 == a22c){ premia1d(30,a,a12,a22c);  }else{bigwin_cancel();}
   
   
    if (a3a == a12 && a12 == a2 ) { premia1d1(30,a3a,a12,a2);}else {bigwin_cancel1();}
    

  var stop = count();
  
document.getElementById("demo2").innerHTML = "TOT WINNING " + stop ;
if (stop <-200 ){document.getElementById("demo2").innerHTML = "you are close to LOSE" + stop;}
if (stop > 200 ){document.getElementById("demo2").innerHTML = " you are close to WIN" + stop ;} 

if(stop< -400){alert("YOU LOSE"+ stop);  ridirect(); }
if(stop > 400){alert("YOU Won" + stop);  ridirect();}
clearInterval(rotYINT)
rotYINT=setInterval("startYRotate()",2)
}
function startRotate()
{
n=n+1
x.style.transform="rotate(" + n + "deg)"
x.style.webkitTransform="rotate(" + n + "deg)"
x.style.OTransform="rotate(" + n + "deg)"
x.style.MozTransform="rotate(" + n + "deg)"
if (n==180 || n==360)
{
clearInterval(rotINT)
if (n==360){n=0}
}
}

function startYRotate()
{
    
ny=ny+1
y.style.transform="rotateY(" + ny + "deg)"
y.style.webkitTransform="rotateY(" + ny + "deg)"
y.style.OTransform="rotateY(" + ny + "deg)"
y.style.MozTransform="rotateY(" + ny + "deg)"

y1.style.transform="rotateY(" + ny + "deg)"
y1.style.webkitTransform="rotateY(" + ny + "deg)"
y1.style.OTransform="rotateY(" + ny + "deg)"
y1.style.MozTransform="rotateY(" + ny + "deg)"

y2.style.transform="rotateY(" + ny + "deg)"
y2.style.webkitTransform="rotateY(" + ny + "deg)"
y2.style.OTransform="rotateY(" + ny + "deg)"
y2.style.MozTransform="rotateY(" + ny + "deg)"

y3.style.transform="rotateY(" + ny + "deg)"
y3.style.webkitTransform="rotateY(" + ny + "deg)"
y3.style.OTransform="rotateY(" + ny + "deg)"
y3.style.MozTransform="rotateY(" + ny + "deg)"

y4.style.transform="rotateY(" + ny + "deg)"
y4.style.webkitTransform="rotateY(" + ny + "deg)"
y4.style.OTransform="rotateY(" + ny + "deg)"
y4.style.MozTransform="rotateY(" + ny + "deg)"

y5.style.transform="rotateY(" + ny + "deg)"
y5.style.webkitTransform="rotateY(" + ny + "deg)"
y5.style.OTransform="rotateY(" + ny + "deg)"
y5.style.MozTransform="rotateY(" + ny + "deg)"

y6.style.transform="rotateY(" + ny + "deg)"
y6.style.webkitTransform="rotateY(" + ny + "deg)"
y6.style.OTransform="rotateY(" + ny + "deg)"
y6.style.MozTransform="rotateY(" + ny + "deg)"

y7.style.transform="rotateY(" + ny + "deg)"
y7.style.webkitTransform="rotateY(" + ny + "deg)"
y7.style.OTransform="rotateY(" + ny + "deg)"
y7.style.MozTransform="rotateY(" + ny + "deg)"

y8.style.transform="rotateY(" + ny + "deg)"
y8.style.webkitTransform="rotateY(" + ny + "deg)"
y8.style.OTransform="rotateY(" + ny + "deg)"
y8.style.MozTransform="rotateY(" + ny + "deg)"

if (ny==180 || ny>=360)
{
clearInterval(rotYINT)
if (ny>=360){ny=0}
 
}
}
//-->
</script>
<br><br>
<img id="rotate3D" style="width: 100px; height: 100px;" src="cuori.jpg">
<img id="rotate3D1" style="width: 100px; height: 100px;" src="picche.jpg">
<img id="rotate3D2" style="width: 100px; height: 100px;" src="picche.jpg"><br>
<img id="rotate3D3" style="width: 100px; height: 100px;" src="cuori.jpg">
<img id="rotate3D4" style="width: 100px; height: 100px;" src="picche.jpg">
<img id="rotate3D5" style="width: 100px; height: 100px;" src="picche.jpg"><br>
<img id="rotate3D6" style="width: 100px; height: 100px;" src="cuori.jpg">
<img id="rotate3D7" style="width: 100px; height: 100px;" src="picche.jpg">
<img id="rotate3D8" style="width: 100px; height: 100px;" src="picche.jpg">

<br>
 <p  class="buioi" id="premia" style="position: absolute"></p><p  class="buioi" id="premia1" style="position: absolute"></p>
   <p  class="buioi" id="demo5" style="position: absolute"></p>
   <p  class="buioi" id="demo51" style=" position: absolute" >  </p>  
 <p class="buioi" id="demo4" style="background-color: green; position: absolute" >  </p>  
<p class="buioi" id="demo3" style="background-color: green; position: absolute" >  </p>
<p class="buioi" id="demo1" style="background-color: green; position: absolute" >  </p>
<p class="buioi" id="demo12" style="background-color: green; position: absolute" >  </p>
<p  class="buioi" id="demo123" style="background-color: green; position: absolute" >  </p>
<br><br> <p class="buioi" id="demo2" style="color: red; position: absolute" > </p>
<br><br><br><br><br><br>


<h1 class="buioi"; id="buioi";style=" width: auto"><button onclick="rotateYDIV()"  style=" width: 600px; border-bottom: 8px solid blue;
                border-radius: 12px;"  type="button"><b>SPIN</b></button></h1>
</body>
</html>
