    <?php
 ini_set('mysql.connect_timeout', 300);
 ini_set('default_socket_timeou',300);
 ini_set('set max_allowed_packet',128);
?>
<!DOCTYPE html>
    <html>
    <title></title>
    <head><meta charset="UTF-8">
        <link  rel="stylesheet" >
    
    <style>
     .body{
      background-color: LightGray;
     }
     .title{
      background-color: DodgerBlue;
      text-align: center;
      text-shadow: 2px 2px yellow;
      border: solid black 1px;
       border-bottom: 6px solid red;
                border-radius: 12px;
                 border-top: 6px solid red;
                border-radius: 12px;
      
     }
     .title:hover{
      color: red;
      text-shadow: 2px 2px 4px #000000;
     }
        .buio:hover{
            background-color: red;
            text-align: center;
        }
        .aiv{
          
          background-color: #caffbb;
          border: solid black 1px;
          
        }
        table,tr,td{
          border: solid rgb(222,232,123);
        }
      .he{
        background-color: lightgreen;
        text-align: center;
        border-bottom: 3px solid red;
        border-radius: 6px;
        
      }
      .error {
        
        text-align: center;
        background-color: red;
       
      }
      .error_password{
       display: inline;
      }
      .greater{
       background-color: MediumSeaGreen;
       text-align: center;
      
        border-bottom: 6px solid red;
                border-radius: 12px;
      }
      .name-error{
       background-color: red;
       color: black;
       text-align: center;
      }
    </style>
    </head>
    <body class="body">
   <h1 class="title">Space for subscribe to Marus web Service</h1>
       <?php
        
      //  $name_user = isset($_POST["name_user"])?$_POST["name_user"]: $_POST["name_user"]="";
        $password = isset($_POST["password"])?$_POST["password"]:$_POST["password"]="";
         $password_conferma = isset($_POST["password_conferma"])?$_POST["password_conferma"]:$_POST["password_conferma"]="";
        
         $image = isset($_POST['image'])? $_POST['image']: $_POST['image']= "";
     
$servername = "localhost";      
$username = "root";
$password_database = "";
$dbname = "mydbpdo";

function insert( $servername,$username, $dbname, $password_database, $name_user, $name,  $password, $image){
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname" , $username, $password_database);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO pasword (name_user,pasword,image) 
    VALUES (:name_user, :pasword, :image)");
    $stmt->bindParam(':name_user', $name_user);
    $stmt->bindParam(':pasword', $password);
    $stmt->bindParam(':image', $image);
$stmt->execute();
        
}catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
}
       //Queso divide la password in caratteri e li conta al fine di imporre un minimo di caratteri
      
       $pas = explode("/",chunk_split($password,1,"/")); //echo count($password);          
          $strlenf = count($pas);
          
       
     
    
       if ($strlenf > 6){   
      
$nameErr="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $name_user = isset($_POST["name_user"])?$_POST["name_user"]: $_POST["name_user"]="";           
  if (empty($_POST["name_user"])) {
    $nameErr = " ! is required";
  } else
  {
            $name = test_input($_POST["name_user"]);   
 
         if ($password != "" &&  $password == $password_conferma && ($_FILES['image']['tmp_name'])==true)
         {
          	$image=addcslashes($_FILES['image']['tmp_name'],"");
		$name= addcslashes($_FILES['image']['name'],"");
		$image=file_get_contents($image);
		$image= base64_encode($image);      
             insert($servername,$username,$dbname,$password_database,$name_user,$name,$password,$image);
            
              //header('Location: Glowin.php');
      try {
    
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname" , $username, $password_database);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT  image , name_user FROM pasword"); 
    $stmt->execute();
  while($row= $stmt->fetch(PDO::FETCH_OBJ)){
    
   //echo $row->name_user;
  
           // echo '<img class="buio" height="150" width="150" src="data:image;base64,'.$row->image.' ">';
            echo "<h3> <a href='login_database.php'> <ul><b>Clik here to reach the login pagge </b></ul></a></h3>";
           echo $row->name_user .'<img height="50" width="50" src="data:image;base64,'.$row->image.' ">';
            // echo "<br>";
         }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

         }       
         else
                {
                   echo "<h1 class='error'>You have writen the wrong <b> password </b> oro <b>You do not have select a <b>picture</b></h1>";
                 }
  }
        
        }
       
        } 
        else
      {
     echo "<h2 clas='error-passsword'> Your  password start whith : $pas[0] ###### has only n° : <span id='dem1'>0</span>  and <b>!😘 To Short </b> </h2>";
         
      }
    //rivedere questo che non funziona come dovrebbe
        
     
           // funzione test imput riduce le possibilita di injection from cliaient    
         function test_input($data){
      
      $data = htmlspecialchars($data);
      $data = trim($data);
      $data = stripcslashes($data);
      return $data;
    }
    
     $reset = isset($_POST["reset"])? $_POST["reset"] : $_POST["reset"]="";
     $nameErr = "";
  if ($_SERVER['REQUEST_METHOD']== "POST"){
   if(empty($name_user)){
    $nameErr = "! name  required";
   }
  }
    
        ?>
        
          <h3 class="he">   ---Fill up the form Please --- OR --- <a href="login_database.php"> <b> go to login page </b> </a></h3>
       <table ><tr class="aiv">
        <form action="" method="post" enctype="multipart/form-data" >
           <td><b>Name</b> <input name="name_user" value=""><span class="name-error">*<?php  echo $nameErr;?></span> </td> 
           <td> <b>Password</b> <input name="password" type="password"  id="dei" onkeypress="myFunction();"></td>
            <td><b>Repeat password</b> <input name="password_conferma" type="password" ></td><br>
              <td><b>Immage</b> <input type="file" name="image"></td>
             
          <td><button class="buio"><b>invia dati </b></button></td> 
          <button name="reset"> reset </button>
        </form>
        </tr>
        </table>
<p id="gio"> qua </p>
<?php
 echo "<h2 class='greater'>The password must greater  than <b> 6  !😘  </b><span id='dem'> now is 0 </span></h2>";
     echo "<div id='de' style='height: 10px;  width: 10px; background-color: red'><p id='mio'></p></div>";
?>
<?php
$reset = isset($_POST['reset'])?$_POST['reset']:$_POST['reset']="x";

if ($_SERVER['REQUEST_METHOD']== "POST"){
 if(isset($reset)){
  //header("Location: function2.php");
  echo $reset;
 }
}
?>

<script>
var add = (function () {
  var counter = 0;
  return function () {
    counter += 5;
  return counter;
  }
})();
var add_color = (function () {
  var counter = 0;
  return function () {
    counter += 55;
  return counter;
  }
})();
var add_uno = (function () {
  var counter = 0;
  return function () {
    counter += 1;
  return counter;
  }
})();
var add_due = (function () {
  var counter = 0;
  return function () {
    counter += 1;
  return counter;
  }
})();
var sot_uno = (function () {
  var counter = 0;
  return function () {
    counter -= 1;
  return counter;
  }
})();

function myFunction(){
 var p = document.getElementById("dei").value;
 document.getElementById("gio").innerHTML = "password you chose " + " : " +"<b>" + p + "</b>"+ " : " ;
 /*if (p == ""){
                                                          document.getElementById("dem").innerHTML =  sot_uno() + "%";
                                                           document.getElementById("dem1").innerHTML =  sot_uno() + "%";
  var y = document.getElementById("de").style;
 var color_y = suot_uno();
  y.width = sot_uno() + "px";
           switch(color_y){
  case 0 :
    y.backgroundColor = "green";
    break;
  case 1 :
    y.backgroundColor= "yellow";
     document.getElementById("mio").innerHTML= "to low";
    break;
  case 2 :
   y.backgroundColor  = "tomato";
   document.getElementById("mio").innerHTML= "gettin better ";
    break;
  case 3 :
     y.backgroundColor = "red";
     document.getElementById("mio").innerHTML= "Passoword is strong enought ";
}
  
 }else{*/
                                                             document.getElementById("dem").innerHTML =  add() + "%";
                                                              document.getElementById("dem1").innerHTML =  add_uno();
  var x = document.getElementById("de").style;
 var color = add_due();
  x.width = add_color() + "px";
    switch(color){
  case 0 :
    x.backgroundColor = "red";
    break;
  case 1 :
    x.backgroundColor= "red";
     document.getElementById("mio").innerHTML= "to low";
    break;
  case 2 :
   x.backgroundColor  = "tomato";
   document.getElementById("mio").innerHTML= "still to low";
    break;
  case 3 :
     x.backgroundColor = "tomato";
     document.getElementById("mio").innerHTML= "still to low";
     break;
     case 4:
     x.backgroundColor = "yellow";
     document.getElementById("mio").innerHTML= "it getting better ";
     break;
     case 5 :
     x.backgroundColor = "yellow";
     document.getElementById("mio").innerHTML= "it getting better ";
     break;
     case 6:
     x.backgroundColor = "green";
     document.getElementById("mio").innerHTML= "<br> Password is strong enough ";
//}
 }
/*if(x.width > "60px" ){
x.backgroundColor= "tomat
}*/
   //  var a12b= ["red","tomato","yellow","green"];
    

    
   

}


</script>
       

  </html>