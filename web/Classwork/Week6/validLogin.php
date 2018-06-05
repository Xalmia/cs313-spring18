<?php

    session_start();

    require('../dbConnect.php');

    echo "Validating login";

    $uName = $_POST['username'];
    $pWord = $_POST['password'];

    $db = get_db();

    $query = "SELECT * FROM user_table WHERE username=:userN;";

    $statement = $db->prepare($query);

    $statement->bindValue('userN', $uName);

    $userValues = $statement->fetchAll(PDO::FETCH_ASSOC);

    $userPWord = $userValues["user_password"];

    if (password_verify($userPWord, $pWord))
    {
        $_SESSION["activeUser"] = $uName;
        header('Location: welcome.php');
        die(); //potato.
    }
    else
    {
        header('Location: index.php');
        die(); //potato.
    }
?>