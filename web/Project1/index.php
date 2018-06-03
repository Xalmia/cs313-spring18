<?php
    require("dbConnect.php");

    $db = get_db();

    if (!isset($db)){
        die("Database Connection was not set.");
    }

    $query = "SELECT journal_id, journal_title FROM journal";
    $statement = $db->prepare($query);

    // bind variables if necessary
    $statement->execute();
    $journal = $statement->fetchAll(PDO::FETCH_ASSOC);
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
        <h1> Welcome! Select a Journal.</h1></br>
        
    </div>
    <div name="journals">
        <ul class="journal-list"> 
            <?php //foreach section, print a thing
                $journalName = $journal["journal_title"];
                echo "<li><a href='sections.php'>$journalName</a></li>";
            ?>
        </ul>
    </div>
</body>
</html>