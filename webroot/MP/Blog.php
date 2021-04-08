<?php
session_start();







?>


<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="stylesheet" href="Blog.css" type="text/css"/>
        <link rel="stylesheet" href="resetMP.css" type="text/css"/>
        <script src="addPost.js"></script>


    </head>
    <body>

      <hgroup>
            <header>
                  <header class="FrontHeader">Naim Uddin</header>
      </hgroup>

      <section>
        <nav>
         <div class="Navi">
        <a href="http://cakephp-mysql-persistent-qmweblab.apps.okd.eecs.qmul.ac.uk/MP/PortfolioFrontPage.html">Home</a>
        &nbsp;&nbsp;&nbsp;
        <a href="#Blog">Blog</a>
        &nbsp;&nbsp;&nbsp;
      </div>
    </nav>
    </section>

    <div class="MainBody">
    <div class="Blog"> <a id="Blog"></a>
<h>Blog</h>
<form id="Form">
      <input type="text" id = "title" name="Title" placeholder = "Title">
      <br><br>

      <textarea id="TextBox" name ="text" placeholder = "Enter Text Here" rows="9" cols="50"> </textarea>
      <br>
      <button type = "submit" onclick="Submission()">Post</button>
      &nbsp;&nbsp;
      <input type="button" onclick="confirmClear()" value="Clear Entry">
</form>




      </div>

    </div>

    <div class="LogOut">
      <a href="Logout.php" class="button">Logout</a>
      </div>




    </body>



</html>
