
    <?php
 ini_set('mysql.connect_timeout', 300);
 ini_set('default_socket_timeou',300);
 ini_set('set max_allowed_packet',300);
?>
<!DOCTYPE html>
<html>
<head>
 <style>
  .error{
   color: #FF0000;
  }
 </style>
</head>
    //action="stef/index.php"
    <a href="index2.php"> qua</a><p><span class="error">* required field</span></p>   
<style>
 .buio{
  text-align: center;
 }
</style>
<body style="background-color: #33aabb"> 
    <h1 class= "buio" style="background-color: rgba(222,24,134) ">MARUS vincenzo</h1>
 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbpdo";
?>
<?php
$firstname=isset($_POST['firstname'])? $_POST['firstname']:$_POST['firstname']= "";
$lastname= isset($_POST['lastname'])? $_POST['lastname']: $_POST['lastname']= "";
function test_input ($data){
 $data = trim($data);
 $data = stripcslashes($data);
 $data = htmlspecialchars($data);
 return $data; 
}


if ($_SERVER["REQUEST_METHOD"]== "POST"){
  include 'function.php';
$nameErr = "name require";
$lastnameErr ="last name require";
  $nameErr = $lastnameErr = $emailErr =" ";
  if(empty($_POST["firstname"])){
   echo $nameErr ; 
  }else{
 $firstname=test_input($firstname);
  }
  if(empty($_POST[$lastname])){
   echo $lastnameErr;
  }else{
 $lastname = test_input($lastname);
  }
 $email= isset($_POST['email'])?$_POST['email']: $_POST['email']="";
$image = isset($_POST['image'])? $_POST['image']: $_POST['image']= "";
$name = isset($_POST['name'])? $_POST['name']:$_POST['name']="";
 
	if (($_FILES['image']['tmp_name'])==false)
	{
		echo "please select an image";
	}else
	{
  //for($i=0; $i<1; $i++){ // this is gona run the program just on any time you load
		$image=addcslashes($_FILES['image']['tmp_name'],"");
		$name= addcslashes($_FILES['image']['name'],"");
		$image=file_get_contents($image);
		$image= base64_encode($image);
		//saveimage($r[0],$r[1],$conn,$name,$image);
		//echo $image ;
		//echo "<br>";
		//echo '<img class="bu" height="100" width="200" src="data:image;base64,'.$image.' ">';
		//echo " from marurs database ";
		//displaiimage($image,$conn);   
	insert( $servername, $username, $dbname, $password, $firstname, $lastname, $email, $image, $name);   
	}  
try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT  image , firstname, lastname FROM vincenzo"); 
    $stmt->execute();
  while($row= $stmt->fetch(PDO::FETCH_OBJ)){
    
   echo $row->firstname;
   echo "---";
   echo$row->lastname ;
           // echo '<img class="buio" height="150" width="150" src="data:image;base64,'.$row->image.' ">';
           echo '<img height="150" width="150" src="data:image;base64,'.$row->image.' ">';
            // echo "<br>";
         }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
}
?>
<form name="vinny"  method="POST"  enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" >
       nome :<input type="text" name="firstname" >
       <span class="error">* <?php echo $nameErr;?></span>
        cognome :<input type="text" name="lastname">
        <span class="error">* <?php echo $lastnameErr;?></span>
        email :<input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        
     <input type="file" name="image">
        <input type="submit"/><input type="reset"/>
    </form>
</body>
</html>