<?php
    echo "page loaded <br>";
    require("dbConnect.php");

    $db = get_db();

    if (!isset($db)){
        die("Database Connection was not set.");
    }

    $query = "SELECT id, section_title FROM section_in_journal";
    echo $query;
    $statement = $db->prepare($query);

    // bind variables if necessary
    $statement->execute();
    $section = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="projectStyle.css" />
    <script src="projectScript.js"></script>
</head>
<body>
    <div name="header">
        <h1> Welcome! </h1></br>
        
    </div>
    <div name="sections">
        <ul class="header-sections"> 
            <?php //foreach section, print a thing
                $section_Name = $section["section_title"];
                echo "<li>$section_Name</li>"
            ?>
        </ul>
    </div>
</body>
</html>