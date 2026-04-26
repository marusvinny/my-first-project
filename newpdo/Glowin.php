<!DOCTYPE html>
    <html>
    <title>Glowing Rotatin CIrcle Page Loader</title>
    <head> <meta charset="UTF-8">
    <link  rel="stylesheet" >
    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
            background-color: #212121;
        }
        .container{
            position: absolute;
            left: 50%;
            top: 50%;
            width: 150px;
            height: 150px;
            background-color: #212121;
            transform: translate(-50%, -50%);            
        }
        .one{
            position: absolute;
            left: -20px;
            top:  -20px;
            right: -20px;
            bottom: -20px;
           background: linear-gradient( #27ae60 , #2980b9  , #2980b9, #2980b9,#2980b9, #e67e22, #d35400);
           border-radius: 50%;
           filter: blur(50px);
            animation: animate 1s linear infinite;
        }
         .two{
            position: absolute;
            left: -10px;
            top:  -10px;
            right: -10px;
            bottom: -10px;
            background: linear-gradient( #27ae60 , #2980b9  , #2980b9, #2980b9,#2980b9, #e67e22, #d35400);
            border-radius: 50%;
            animation: animate 1s linear infinite;
        }
        .three{
          text-align: center;
          
        
            position: absolute;
            width: 100%;
            height: 100%;
        background-color: #212121;
         border-radius: 50%;
        }
        /*ANIMATION START HERE*/
        @keyframes animate{
            0%{ transform: rotate(0deg);}
             100%{ transform: rotate(360deg);}
        }
        .buio{
          background-color: yellow;
          color: black;
          text-align: center;
        }
    </style>
    
    </head>
 
    <body>
        <?php
        $name = isset($_POST['name'])? $_POST['name']:$_POST['name']="";
        $password_user=isset($_POST['password'])? $_POST['password']: $_POST['password']="hhh";
        
        
        echo "<h1 class ='buio' > $name </h1>";
         echo "<br><h1 class ='buio' > yuo had log on in your web side </h1>";
        
        ?>
   <a href='login_database.php'>
      <div class="container">
        
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"><br><br><br><b style="color: yellow"> go back </b><br><br><br><b style="background-color: #aabfbf"><a href="uomoq.php"> go haead </a></b></div>
        </a> 
      </div> 
        
        
    </body>
  </html>