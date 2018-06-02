<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Jesse Scott's CS313 Landing Page</title>
  <link rel="stylesheet" type="text/css" media="screen" href="indexStyle.css" />
  <script src="indexScripts.js"></script>
</head>
<body>
  <div class="body">
    <div id="header" class="header bordered">
      <h1>Jesse Scott's Homepage</h1>
      <br/>
      <?php 
        date_default_timezone_set("America/Boise");
        // Variable that holds the date to be displayed.
        $currentTimezone = date_default_timezone_get();
        
        $current_date = date('d/m/Y == h:i:s');
        echo "<h3>$current_date $currentTimezone</h3>";
      ?>
    </div>
    <div id="assignments" class="assignmentBar bordered">
      <a href="aboutMe.php">About Me</a>
      <br/>
      <a href="hello.html">Assignment 1</a> </br>
      <a href="index.php">Assignment 2</a> </br>
      <a href="week03/Assignment03.php">Assignment 3</a> </br>
      <a href="Project1/index.php">Project 1</a>
      <?php
        /*for($i = 3; $i < 10; $i++){
          $assignmentNumber = $i + 1; //Temporary I value
          echo "<a href='/week0$assignmentNumber/assignment0$assignmentNumber.php'>Assignment $tempI</a> <br/>";
        }*/
      ?>
    </div>
</div>
</body>
</html>
