   <?php
 ini_set('mysql.connect_timeout', 300);
 ini_set('default_socket_timeou',300);
 ini_set('set max_allowed_packet',128);
?>

<!DOCTYPE html>
    <?php include 'function.php'; ?>
    <html>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <head>
            <style>
                  .buiofix{
                background-color: lightgreen;
                text-align: center;
                border-bottom: 6px solid red;
                border-radius: 12px;
                color: white;
                position: absolute;
                width: 100%;
                height: 80px;
            }
            h1{
                padding: !important;
                float: left;
            }
                span{
                    display: inline-block;
                    border-bottom-width: medium;
                }
                .fi{
                    
                    border-bottom: dotted;
                }
            </style>
        </head>
         
      <body style="background-color: red">
        <h1 class="buiofix"> MARUS WEB <br><a  href="uomoq.php">HOME</a> <a href="animate2.php">giochi</a> </h1> 
      <table class="fi">
        <tr>
    <br><br><br><br>
       <td>  <iframe class="buio"  src="log.php"  style="width: 500px; height: 500px;">  </iframe></td>
        <td>  <iframe class="buio"  src="log1.php"  style="width: 600px; height: 400px;">   </iframe></td>
         </tr>
         </table> 
        <br>
        
     
        
      </body>
        
    </html>