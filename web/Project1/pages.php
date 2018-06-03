<?php
    require("dbConnect.php");

    $db = get_db();

    if (!isset($db)){
        die("Database Connection was not set.");
    }

    $query = "SELECT page_id, page_title FROM page_in_journal";
    $statement = $db->prepare($query);

    // bind variables if necessary
    $statement->execute();
    $page = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div name="header">
        <h1> Welcome! Select a Page.</h1></br>
    </div>
    <div name="pages">
        <ul class="page-list"> 
            <?php //foreach page, print a thing
                $pageName = $page["page_title"];
                echo "<li><a href='page_display.php'>$pageName</a></li>";
            ?>
        </ul>
    </div>
</body>
</html>