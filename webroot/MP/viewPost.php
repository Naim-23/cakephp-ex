<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM BLOG";

$result = mysqli_query($conn,$query);

function bubble_sort($arr) {
    $size = count($arr)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($arr[$k] < $arr[$j]) {
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr;
}




while($row = mysqli_fetch_assoc($result)){

  $arr[] = $row;




}

$arr = bubble_sort($arr);
echo $row['title'];


?>

<!DOCTYPE html>
<html>
<title>
  Blog Posts
</title>
<style>
body {
  background-color: orange;
}
</style>

<body>

  <table align= "center" border ="1px" style = "width:600px; line-height:40px;">
    <tr>
      <th colspan="4"><h2>Blog Posts</h2></th>
    </tr>
    <t>
      <th>Title</th>
      <th>Post</th>
      <th>Time</th>
      <th>Date</th>
    </t>

    <?php

    while($rows = mysqli_fetch_assoc($result)) {

?>
      <tr>
      <td><?php echo $rows['title']; ?></td>
        <td><?php echo $rows['content']; ?></td>
          <td><?php echo $rows['postTime']; ?></td>
            <td><?php echo $rows['postDate']; ?></td>
            </tr>
  <?php
    }

    ?>

  </table>
</body>
</html>
