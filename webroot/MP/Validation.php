<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("ecs417");
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

if (isset($_POST['email'])) {
  $email=$_POST['email'];
  $password=$_POST['password'];

  $value = mysqli_query($conn, "SELECT * FROM LOGIN1 WHERE email = '$email' AND password = '$password' ");
  if(mysqli_num_rows($value)==1)
  {
     header("location: Blog.php");
  }

  else {
    echo "Invalid Email Or Password";
  }

}































 ?>
