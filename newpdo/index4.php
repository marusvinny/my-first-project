
<!DOCTYPE HTML>  
<html>
<head>
    <style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name'])? $_POST['name']: $_POST['name']="Please enter your name";
    $gender= isset($_POST['gender'])? $_POST['gender']: $_POST['gender']= "Please enter your gender";
 if(empty($_POST["name"])){
   $nameErr = " Name is required" ; 
 }else{
  $name = test_input($_POST["name"]);
  }
  if(empty($_POST["email"])){
    $emailErr = " Email required";
    }else{
  $email = test_input($_POST["email"]);
  }
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  if(empty($_POST['website'])){
    $website = " is not required";
    }else{
  $website = test_input($_POST["website"]);
  }
  if(empty($_POST['comment'])){
    $comment="";
    }else{
  
  $comment = test_input($_POST["comment"]);
  }
  if(empty($_POST['gender'])){
    $genderErr = "the gender is required";
  }else{
  $gender = test_input($_POST["gender"]);
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
 // $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">  
  Name: <input type="text" name="name">
  
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr; ?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error">*<?php echo $websiteErr ; ?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <span class="error"><?php echo $commentErr ;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
    <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "Today is " . date("l");
echo "<br>";


echo "<br><br>";
$port = disk_free_space("C:");
echo $port ;
echo "<br>";
echo "<h2>Your Input:</h2>";
echo "Name  : " .$name . $nameErr;
echo "<br>";
echo "Email  : " .$email;
echo "<br>";
echo "website  :  " . $website;
echo "<br>";
echo "Your comment : " . $comment;
echo "<br>";
echo  "Gender :  " . $gender;
echo "<span class='error'>* <?php echo $genderErr;?></span>";
?>

</body>
</html>

