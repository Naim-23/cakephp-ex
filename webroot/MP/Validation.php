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
  $row = mysql_fetch_array($value);

  if (is_array($row)){
              $_SESSION["email"] = $row ['email'];
              $_SESSION["password"] = $row ['password'];
                  if ($_POST['email'] == $email && $_POST['password'] == $password){
                   $_SESSION['email'] =$email;
                   echo '<script>location.href = "Blog.php"</script>';
                  }
          }
          else{

              echo "Invalid Email or Password";
          }
      }































 ?>
