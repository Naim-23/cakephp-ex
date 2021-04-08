<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("ecs417");

$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
?>






















<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="LoginForm.css" type="text/css"/>
        <link rel="stylesheet" href="resetMP.css" type="text/css"/>

    </head>
    <body>

      <div class="LoginBox">
        <h1>Login</h1>
        <form action="Validation.php" method="POST">
          <p>Email</p>
          <input type= "email" name="email" placeholder = "Enter Email Here ">
          <p>Password</p>
          <input type="password" name="password" placeholder = "Enter Password Here">
          <input type="submit" name="login" value = "Login">
          </form>
          </div>




    </body>



</html>
