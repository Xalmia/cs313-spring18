<?php    
    require("dbConnect.php");

    $course_id = htmlspecialchars($_GET["course_id"]);

    $db = get_db();

    if (!isset($db)){
        die("Database Connection was not set.");
    }

    $query = "SELECT name, number FROM course WHERE id=:id";
    $statement = $db->prepare($query);
    $statement->bindValue(":id", $course_id, PDO::PARAM_INT);
    // bind variables if necessary
    $statement->execute();
    $courses = $statement->fetch();
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
    <?php
        //Lets add some variables
        $name = $courses["name"];
        $number = $courses["number"];
    ?>  
    <h1><?php echo "$number - $name Notes" ?></h1>

    <p>Test text for notes</p>
</body>
</html>