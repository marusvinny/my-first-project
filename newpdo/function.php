
    <?php
 ini_set('mysql.connect_timeout', 300);
 ini_set('default_socket_timeou',300);
 ini_set('set max_allowed_packet',128);
?>
<?php
$firstname=isset($_POST['firstname'])? $_POST['firstname']:$_POST['firstname']= "";
$lastname= isset($_POST['lastname'])? $_POST['lastname']: $_POST['lastname']= "";
$email= isset($_POST['email'])?$_POST['email']: $_POST['email']="";
$image = isset($_POST['image'])? $_POST['image']: $_POST['image']= "";
$name = isset($_POST['name'])? $_POST['name']:$_POST['name']="";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbpdo";

function insert( $servername,$username, $dbname, $password, $firstname, $lastname, $email, $image, $name){
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname" , $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO vincenzo (firstname, lastname, email, image) 
    VALUES (:firstname, :lastname, :email, :image)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);
     $stmt->bindParam(':image', $image);
$stmt->execute();
    // insert a row
    
    
}catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
} 
?>