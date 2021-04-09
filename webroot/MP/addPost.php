<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo ('Not Working');

if (isset($_POST['submit'])) {

  echo ('Here');
  $title=$_POST['title'];
  $text=$_POST['text'];
  date_default_timezone_set("Europe/London");
  $postTime = date("H:i:s");
  $postDate = date("d/m/y");

  $value = "INSERT INTO BLOG (title, content, postTime, postDate) VALUES ('$title', '$text', '$postTime', '$postDate')";
  $mysqli_query($conn,$value);

   header ("location: viewPost.php");

      }



?>
