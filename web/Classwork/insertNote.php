<?php

    $course_id = htmlspecialchars($_POST["course_id"]);
    $date = htmlspecialchars($_POST["date"]);
    $content = htmlspecialchars($_POST["content"]);

    //echo "Course Id: $course_id";
    //echo "Date: $date";
    //echo "content: $content";
    require("dbConnect.php");

    $db = get_db();

    $query = "INSERT INTO note (course_id, content, date)
        VALUES (:course_id, :content, :date)";
    $statement = $db->prepare($query);
    $statement->bindValue(":course_id", $course_id, PDO::PARAM_INT);
    $statement->bindValue(":content", $content, PDO::PARAM_STR);
    $statement->bindValue(":date", $date, PDO::PARAM_STR);

    $statement->execute();

    header("location: classNotes.php?course_id=$course_id");
    die();
?>