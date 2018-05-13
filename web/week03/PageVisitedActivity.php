<?php 
    session_start();

    //initialize the session variable if it doesn't exist
    if (!isset($_SESSION["visited"]))
        $_SESSION["visited"] = 0;
    
    $_SESSION["visited"]++;
    $temp = $_SESSION["visited"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Visited Sessions!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php 
        echo "You have visited this page $temp times"
    ?>
</body>
</html>