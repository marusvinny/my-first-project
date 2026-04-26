
<!DOCTYPE html>
<html>
<body>

<form method="post" action="upload.php/"><script>alert('welcome to marus page')</script>
  numero: <input type="text" name="fname">
  <input type="submit">
</form>
<?php
$a=isset($_POST['fname'])? $_POST['fname']: $_POST['fname']= "ggg";
echo $a . "<br>";
echo $_GET['web'];
?>


</body>
</html>