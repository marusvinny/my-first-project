 <!DOCTYPE html>
<html lang="en-us">
    <head>
        <title >--------------------ajax tecnology----------------------</title>
         <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript,PHP">
  <meta name="author" content="Marus Vincenzo">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><br>
  
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
        alert("Welcome again " + user);
    } else {
       user = prompt("Please enter your name:","");
       if (user != "" && user != null) {
           setCookie("username", user, 30);
       }
    }
}

</script>
    <script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
    </head>
<body onload="checkCookie()">
<p id="demo"Cookies></p>
<button onclick="marus()">Delete a cookie</button>
<script>
  // function for delete a cookies but yo have
  //to create  a button
    function marus(){
      
       document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        
       alert("delete the cookies");
    }


</script>
  
    </head>
<body >
<p><b>Start typing a name in the input field below:</b></p>
<form> 
First name: <input type="text" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>
<p id="demo1"> valore str</p>

<script>
   
</script>
</body>
</html>