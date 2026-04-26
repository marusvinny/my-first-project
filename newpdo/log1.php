

<!DOCTYPE html>
<html>
<body>

<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>

 <?php
 echo "<br>";
 require "log.php";
 
echo " qua arriva ".$_SESSION['path'];
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = isset($_POST['name'])? $_POST['name'] : $_POST['name']= $_SESSION['path'];
 
     $myfile = fopen("$name", "a+") or die("Unable to open file!");
    $message = isset( $_POST['comment'])?$_POST['comment']: $_POST['comment'] = "";
    $read = fwrite($myfile,$message);
    $myfile = fopen("$name", "r") or die("Unable to open file!");
echo fread($myfile,filesize("$name"));
fclose($myfile);
   echo filesize("$name"); 
 }

?>
 <?php
 if($name != ""){
$file = fopen($name, "r");

//Output a line of the file until the end is reached
$line = fgets($file);
while(! feof($file))
{
  echo $line. "<br />";
  $line = fgets($file);
}

fclose($file);} else{
 echo "no file to open jet ";
}
?>
 <script>
 function marus()
{
  alert("facci vedere");
}
document.getElementById("dei").onclick = marus();
 </script>
<button id="dei" type="button" onclick="marus();">nnnn</button>
</body>
</html>