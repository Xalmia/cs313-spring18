<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Jesse Scott's CS313 Landing Page</title>
  <link rel="stylesheet" type="text/css" media="screen" href="indexStyle.css" />
  <script src="indexScripts.js"></script>
</head>
<body>
  <h1>Hello World</h1>
<?php

for ($i = 0; $i < 10; $i++)
{
  if ($i % 2)
  {
    echo "<div id='$i' style='fontcolor=red;'></div>";
  }
  else
  {
    echo "<div id='$i' style='fontcolor=blue;'></div>";
  }
}
?>
</body>
</html>
