<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

if (isset($_POST['email'])) {
  $email=$_POST['email'];
  $password=$_POST['password'];

  $value = mysqli_query($conn, "select * from LOGIN where email = '$email' AND password = '$password'");
  if(mysqli_num_rows($value)==1) {
    echo '<script>location.href = "Blog.php"</script>';
  }

  else {
    echo "Invalid Email Or Password";
  }

}































 ?>
