<!DOCTYPE html>
    <html>
    <title></title>
    <head> <meta charset="UTF-8">
   
        <link  rel="stylesheet" >
    <style>
     body{
      background-color: 	#87CEFA;
     }
        .one-container{
            
            width: 280px;
            height: 400px;
            background-color: lightblue;
        }
        .two-container{
            padding-left: inherit;
            padding-bottom: inherit;
            padding-right: inherit;
            padding-top: inherit;
            padding: 0.15px;
            margin: 015px;
            width: auto;
            height: auto;
            background-color:  #ffaabb ;
        }
        .buio:hover{
          background-color: red;
          color: black;
          text-align: center;
        }
        .buio_uno{
         background-color: 	#778899;
         text-align: center;
                border-bottom: 6px solid ;
                border-radius: 12px;
                color: black;
        }
      div.relative {
  position: relative;
  left: 480px;
  border: 3px solid #73AD21;
   width: 280px;
            height: 400px;
}
      div.relative_enter {
  position: relative;
  left: 80px;
  border: 3px solid #73AD21;
   width: 280px;
            height: 400px;
}
.fei{
 text-align: center;
 background-color: tomato;
 color: blue;
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script>
$(document).ready(function(){
  $(".dei").click(function(){
    $(".relative").hide(1000);
  });
});
</script>
    
    <script>
$(document).ready(function(){
  $(".deiz").click(function(){
    $(".relative").show(1000);
  });
});
</script>
    </head>
    <body>
  
     <h1 class="buio_uno">  Please LOG IN with User name and Password or </h1>
    <?php //include "function1.php"; ?><button><a href="function1.php"><b>GO to Register page</b></a></button>
    <button class="dei"> hide </button> <button class="deiz"> show more  </button>
        </div>
     <div class="relative">
        <form action="login_database.php" method="post">
        <div class="one-container"><h3 class="fei"> user log in </h3>
            <div class="two-container">
            <b>   user </b><input class="user-name" style="padding: inherit" name="name_user"><br><br
             <b>pasword</b><input class="pasword-conection"  style="padding: inherit;" name="password" type="password"><br><br>
             <button class="buio"><b>LOG IN</b></button>
            </div>
            </form>
        </div>
        </div>
    </body>
        <?php
         $name_user = isset($_POST['name_user'])? $_POST['name_user']:$_POST['name_user']="";
        $password_user=isset($_POST['password'])? $_POST['password']: $_POST['password']="hhh";
       function maru($name_user, $password_user){
        
   $servername = "localhost";
      $username = "root";
          $password = "";
            $dbname = "mydbpdo";


try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname" , $username,  $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // prepare sql and bind parameters
    echo "conection ok";
    
$stmt = $conn->prepare("SELECT name_user, pasword FROM pasword"); 
    $stmt->execute();
 $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    // set the resulting array to associative
//var_dump($stmt->fetchAll());

$rei = $stmt->fetchAll();
foreach($rei as $v=>$k ){
  //echo "<br>" . $k["name"];echo "<br>" . $k["pasword"];
  if($k["name_user"] == $name_user && $k["pasword"] == $password_user){
   echo " you in";
   header('Location: Glowin.php');
  }else
  {
   
echo "<h1>no conection</h1>";
// da qui

//a qui  modifiche per visione foto
  }

}
      echo "<h1>you out </h1>";
 echo "<a href='function1.php'><b> Here you can register your self </b></a>";
 echo "<br>";
 echo "<a href='Glowin.php'><b> Main page </b></a>"; 
}catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
      
  }
  
  
    
       maru($name_user,$password_user);
     
?>
        
        
  </html>