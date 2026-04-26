<!DOCTYPE html>
<html lang="en-us">
    <head>
     <style>
        .div4{
                background-color: lightgreen;
                text-align: center;
                padding: important;
                border-bottom: 6px solid red;
                border-radius: 12px;
                color: white;
            }

     </style>
        <title >--JavaScript Cookies--</title>
         <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript,PHP">
  <meta name="author" content="Marus Vincenzo">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><br>
 
  <script>
  function setStartTime(dayu){
    return   dayu ;
   }
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
 var day;
function checkCookie() {
    var user=getCookie("username");
   
    if (user != "") {
        alert("Welcome again " + user);
    } else {
       user = prompt("Please enter your name:","");
        day = prompt("Please enter the time:","");
      
       if (user != "" && user != null) {
           setCookie("username", user, day);
          
       }
    }
}

</script>
    </head>
<body onload="checkCookie()">
<p id="demo"Cookies></p>
<p id="demo1">qua</p>
<p id="demo2"> valori</p><p id="demo3"> valore di document.cookie</p>
<button onclick="marus()">Delete a cookie</button>
<button onclick="marus1()">see  the user name  component of cookie</button>
<button onclick="StartTime()"> see the ending time of cookie</button>
<button onclick="loadDoc()"> new XMLHttpRequest()</button>
<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {//When readyState is 4 and status is 200, the response is ready:
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();
}
</script>
<script>

  function StartTime()
  {
  if(day==null){ day=1;}
 
 
 var d = new Date();
   d.setTime(d.getTime()+(day*24*60*60*1000)); 
 
  d = "expires=" + d.toGMTString();
 
   
     document.getElementById("demo3").innerHTML =d;
  }
  function marus1(){
  
    
     var name = "username" + "=";
    var decodeCookies1= decodeURIComponent(document.cookie);
    var ca=decodeCookies1.split(';');
     for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
         if (c.indexOf(name) == 0) {
           document.getElementById("demo2").innerHTML = c;  
        }
   
  
    
  }
  }
  // function for delete a cookies but yo have
  //to create  a button
    function marus(){
       
      var user=getCookie("username");
      if (user !=""){
       document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        
       alert("delete the cookies");
      }else
      {
        document.getElementById("demo1").innerHTML="you do not have cookies set yet";
      }
    }


</script>

<br>

<br>
<div id="div4"  class="div4" style="width:80px;height:80px;background-color:red;" ><a href="jquery.php" ><b > G </b> </a></div>
</body >
</html>