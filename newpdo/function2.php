<!DOCTYPE html>
    <html>
    <title></title>
    <head> <meta charset="UTF-8">
        <link  rel="stylesheet" >
         <?php
    function ridirect(){
        header("Location: function1.php");
    }
    ?></head>
    <body onload="ridirect();">
       
    <?php ridirect();?>
    </body>
   
  </html>