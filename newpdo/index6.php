<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		p{
			text-align: center;
		}
	</style>
	<?php
	/*$name_cookie = "user";
	$value_cookie = "FARE ";
	setcookie($name_cookie,$value_cookie , time()+ (84600 * 30));*/
	?>
<script>		
	function deleteCookie()
	{	
	   var user=getCookie("username");
      if (user !=""){
       document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        
       alert("delete the cookies");
      }else
      {
        document.getElementById("demo1").innerHTML="you do not have cookies set yet";
      }
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

function checkCookie() {
    var user=getCookie("username");
    if (user != "") {
        alert("Welcome again " + user);
		document.getElementById("doe").innerHTML = "the cookie is " + user;
    } else {
       user = prompt("Please enter your name:","");
       if (user != "" && user != null) {
           setCookie("username", user, 30);
	document.getElementById("doe").innerHTML = "the cookie is " + user;
       }
    }
}

</script>
</head>

<body onload="checkCookie()"  id="dei"  >
	<h1 style="background-color: Red"> exsample how to  set the cookies -------------- <a href="uomoq.php"> HOME</a>
	----------------chose collor:<input type="text" id="testo" name="session"><button onclick="change()">change color page</button></h1>
	
	<form action="index6.php" method="post">

<button type="submit">Reload a Page </button>
	</form>
	<button type="submit" onclick="marus()">see the cookie</button>
	
	<script>
		
		
	</script>
	<?php
	/*if(!isset($_COOKIE[$name_cookie]))
	{
	echo "the cookie is not set" . $name_cookie;
	}else
	{
	echo "The cookie is set : " . $value_cookie;
	}
	$session = $_POST['session'];
	if(!isset($_POST['session'])){
$_SESSION['collor']= "Green";
}else
	{
	$_SESSION['collor']= $session;
	}
$color =  $_SESSION['collor'];

*/
?>
	<button onclick="deleteCookie()">delete cookie</button>
	<p id="demo1" style="background-color: red"> </p><br>
	<p id="doe" style="background-color: red"> </p><br>
	<script>
		var d = getCookie("green");
		 document.getElementById("dei").style.backgroundColor = d;
	function change(){
	var col = document.getElementById("testo").value;
	
	 document.getElementById("dei").style.backgroundColor = col;
	
	}
	
	</script>
</body >
</html