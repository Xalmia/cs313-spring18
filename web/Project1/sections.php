<?php
    require("dbConnect.php");

    $db = get_db();

    if (!isset($db)){
        die("Database Connection was not set.");
    }

    $query = "SELECT section_id, section_title FROM section_in_journal";
    $statement = $db->prepare($query);

    // bind variables if necessary
    $statement->execute();
    $sections = $statement->fetchAll(PDO::FETCH_ASSOC);
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
        <h1> Welcome! Select a Section.</h1></br>
    </div>
    <div name="sections">
        <ul class="section-list"> 
            <?php //foreach section, print a thing
            foreach ($sections as $section)
            {
                $sectionName = $section["section_title"];
                echo "<li><a href='pages.php'>$sectionName</a></li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>