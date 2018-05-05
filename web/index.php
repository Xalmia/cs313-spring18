<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Jesse Scott's CS313 Landing Page</title>
  <link rel="stylesheet" type="text/css" media="screen" href="indexStyle.css" />
  <script src="indexScripts.js"></script>
</head>
<body>
<div id="header" class="header">
  <h1>Jesse Scott's Homepage</h1>
  <br/>
  <?php 
    $currentTimezone = date_default_timezone_get();
    // Variable that holds the date to be displayed.
    $current_date = date('d/m/Y == h:i:s');
    echo "<h3>$current_date $currentTimezone</h3>"
  ?>
</div>
<div id="assignments" class="sidebar">
<?php
  for($i = 0; $i < 10; $i++){
    echo "<a href='/assignments/assignment$i.php'>Assignment $i</a>";
  }
?>
</div>
<div id="about">

</div>
</body>
</html>
