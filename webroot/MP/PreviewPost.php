<?php
$title=$_POST['Title'];
$text=$_POST['text'];
date_default_timezone_set("Europe/London");
$postTime = date("H:i:s");
$postDate = date("y/m/d");


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


       <tr>
       <td><?php echo $title; ?></td>
         <td><?php echo $text; ?></td>
           <td><?php echo $postTime; ?></td>
             <td><?php echo $postDate; ?></td>
             </tr>
   

   </table>
 </body>
 </html>
