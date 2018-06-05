<?php
    require('../dbConnect.php');

    $uName = $_POST["username"];
    $pWord = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $db = get_db();

    $query = "INSERT INTO user_table (username, user_password) VALUES (':userN', ':passW');";

    $statement = $db->prepare($query);
    $statement->bindValue(':userN', $uName);
    $statement->bindValue(':passW', $pWord);
    $statement->execute();

    header('Location: index.php');
    die(); //potato.
?>