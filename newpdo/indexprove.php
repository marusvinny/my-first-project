

<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title >php prove </title>
<h1 style="padding-left: 100px" title="When a web page is loaded,
the browser creates a Document Object Model of the page.
The HTML DOM model is constructed as a tree of Objects:">Php tutorial</h1><a href="https://www.w3schools.com/js/js_htmldom.asp">see : JavaScript HTML DOM</a>
         <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript,PHP">
  <meta name="author" content="Marus Vincenzo">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><br>
  
  <br>
    

<input type="number" id="mio">
      <button onclick="myFunction()"> vai </button>
     <p id="demo"></p>
     <p id="demo1"></p>
     <script>
       
        
var add = (function () {
    var counter = 0;
    
    return function () { counter += document.getElementById("mio").value;
	return counter;}
})();

function myFunction(){
     var a = document.getElementById("mio").value;
    document.getElementById("demo").innerHTML = add()  ;
    document.getElementById("demo1").innerHTML = a;
}
</script>
</body>
</html>