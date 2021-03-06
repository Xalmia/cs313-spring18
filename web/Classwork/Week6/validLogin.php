<?php

    session_start();

    require('../dbConnect.php');

    echo "Validating login<br>";

    $uName = $_POST['username'];
    $pWord = $_POST['password'];

    $db = get_db();

    $query = "SELECT * FROM user_table WHERE username=:userN;";

    $statement = $db->prepare($query);
    $statement->bindValue('userN', $uName);
    $statement->execute();
    $userValues = $statement->fetchAll(PDO::FETCH_ASSOC);

    $userPWord = $userValues[0]["user_password"];

    if (password_verify($pWord, $userPWord))
    {
        $_SESSION["activeUser"] = $uName;
        header('Location: welcome.php');
        die(); //potato.
    }
    else
    {
        header('Location: login.php?loginFail=1');
        die();
    }
?>