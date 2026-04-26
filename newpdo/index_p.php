<?php

session_start();
?>
<!DOCTYPE html>
<html>
    <head>
	
	<style>
.demo {
    text-align: center;
    
    color: red;
}

</style>
    </head>
<body>

<h2>What Can JavaScript Do?</h2>

<p id="dei">JavaScript can change HTML attribute values.</p>

<p>In this case JavaScript changes the value of the src (source) attribute of an image.</p>

<button onclick="document.getElementById('myImage').src='pic_bulbon.gif'">Turn on the light</button>

<img id="myImage" src="pic_bulboff.gif" style="width:100px">
    <p id="demo" class="demo" >value</p>
<p id="sei"></p>
<button onclick="document.getElementById('myImage').src='pic_bulboff.gif' ">Turn off the light</button>
<button onclick="document.getElementById('myImage').style='width:150px'">(+)</button>
<button onclick="marus()">++</button>
<button onclick="aument()">++++</button>
<input id="fai"><button type="submit" onclick="me()"> push</button>
<p id="faie"></p>
<script>
    var add = (function () {
    var counter = "";
    return function () { counter += "<li>" + document.getElementById("fai").value + "</li>";
	return counter;}
})();
 
 var addnumbers =(function(){
    var counter = 0;
    return function (){
	counter  += 1;
	return counter;
    }
    })();
   function marus(){
    var a = add();
    document.getElementById('myImage').style='width:100px'+a;
    
   }
function aument(){
    document.getElementById("demo").innerHTML= addnumbers();
}
 function me(){  
var i;
var d = ["dai","che","vano"];
 var g =add();  
    d.push(g);
var dLenf = d.length;
var text = "<ul>";
for(i=0; i < dLenf; i++)
{
    text += "<li>" +  d[i] + "</li>";
}

text +="<ul>";
 document.getElementById("dei").innerHTML = text;  
  document.getElementById("faie").innerHTML= g;
}
var testo;
var fruits = ["banane","meloni","pomodori","ciliege"];
testo = "<ul>";
fruits.forEach(myfunctionFruct);
testo += "</ul>";
document.getElementById("sei").innerHTML= testo;
function myfunctionFruct(value){
    testo += "<li>" + value + "</li>";
}

</script>
<form method="post">
    name : <input type="text" name="compra">
 carica prodotto : <input type="text" name="fruit">  <button type="submit"> try</button> 
</form>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$fruits = array("Marus"=>"banane","Teresa"=>"meloni","Maria"=>"ciliege","Roberto"=>"pomodori");
$r = $_POST['fruit'];
array_push($fruits,$r);
foreach($fruits as $x=>$x_value){
if($x === 0 ){ $x=$_POST['compra'] ;}
echo "<ul><li class='demi'> il sigg :" . $x . " ha comprato : <b>" . $x_value . "</b></li></ul>"; 
}
}
echo "<br>";
$variable = null;
$variable = " ";
var_dump($variable);

?>
<?php
class MyClass {
const CONST_VALUE = 'sono <br> io';
    
}



 echo MyClass::CONST_VALUE;
echo "ciao";
?>
<?php
echo "<br>";
class Car {
    function Car() {
        $this->model = "<br> VW";
    }
}
// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;

?>
</body>
</html>