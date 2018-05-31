<?php

    $course_id = htmlspecialchars($_POST["course_id"]);
    $date = htmlspecialchars($_POST["date"]);
    $content = htmlspecialchars($_POST["content"]);

    echo "Course Id: $course_id";
    echo "Date: $date";
    echo "content: $content";
    
?>