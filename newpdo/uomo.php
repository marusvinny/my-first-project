<!DOCTYPE html>
    <html>
    <title></title>
    <head> <meta charset="UTF-8">
        <link  rel="stylesheet" >
    <style>
        body{
          background-color: lightblue;
    
        }
        #css{
          border-bottom-style: inset;
            background: black;
           width: 300px;
           height: auto;
           color: yellow ;
            margin-left: 50px;
            margin-top: 50px;
        }
        #buio {
          width: 600px;
          height: 200px;
          background-image: url(picche.jpg);
          border-bottom-style: inset ;
        }
        #demo{
          border: solid 5px;
          border-style: double;
          background: green;
        }
         #demo1{
          border: solid 5px;
          border-style: double;
          background: green;
        }
        .j{
         background-color: red;
         text-align: center;
         
        }
    </style>
    
    </head>
    <body id="mio">
     <h1 class="j">Test for change ouput on java script</h1>
     <textarea id="css"></textarea>
     <input style="width: 50px" id="css" type="button" onclick="marus();" onmouseover="cambio();">
     <form  method="get">
     
          <button type="button" id="css" onclick="loadDoc('text.txt', myFunction);" >Change Content</button>
          
        </form>
        <p id="demo"></p><p id="demo1"></p><br><p id="demo2"></p>
        <script>

function loadDoc(url, cFunction) {
  var xhttp;
  xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      cFunction(this);
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}


function myFunction(xhttp) {
 
 var x = xhttp.responseText;
var test = document.getElementById("css").value;
x= x.split(" ");
test = test.split(" ");
document.getElementById("demo").innerHTML = x[6];

for (var i = 0; i < x.length; i++){
 for (e = 0; e < test.length; e++){
  if (test[e] == x[i]  ){  
   document.getElementById("demo2").innerHTML = "yo try insult some one ";
   test[e]= "<b> !!not 😘  allowed!!  </b>";
  }else
  {
   document.getElementById("demo1").innerHTML = test.join(" ");
  }
  
 }
 
}
}
</script>
        <script>
        
          function marus(){
            var array = ["blue","red","green" ,"lightblue"];
            var u = Math.floor(Math.random() * 4);
              var h = document.getElementById("mio").style;
              if (h.backgroundColor == "lightblue"){
            h.backgroundColor= "yellow";}else{
              h.backgroundColor = array[u];              
           }
            var x = document.getElementById("css").value;
            document.getElementById("demo").innerHTML= "<br>" + x;
            var y = document.getElementById("css").style;
            y.backgroundColor = "red";          
          }
          function cambio(){
            var d = Math.floor(Math.random() * 4);
            var b = ["picche.jpg","cuori.jpg","fiori.jpg","quadri.jpg"];
            document.getElementById("buio").src = b[d];
            
          }
        </script>
        <img id="buio" src="cuori.jpg">
    </body>
  </html>
    
    
   