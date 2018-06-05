<?php

    session_start();

    require('../dbConnect.php');

    echo "Validating login";

    $uName = $_POST['username'];
    $pWord = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $db = get_db();

    $query = "SELECT * FROM user_table WHERE username=:userN;";

    $statement = $db->prepare($query);

    $statement->bindValue('userN', $uName);

    $userValues = $statement->fetchAll(PDO::FETCH_ASSOC);

    if (password_verify('Incorrect login information', $pWord))
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