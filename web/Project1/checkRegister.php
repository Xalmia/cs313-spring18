<?php
    require('../dbConnect.php');

    $uName = $_POST["username"];
    $pWord = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $db = get_db();

    $query = "SELECT username FROM user_file WHERE username=:userName";
    
    $statement = $db->prepare($query);
    $statement->bindValue(":userName", $uName, PDO::PARAM_STR);
    $statement->execute();
    
    $dbUsername = $statement->fetch();

    // Insert if the name exists, don't if it doesnt.
    if ($uName == $dbUsername)
    {
        header('Location: register.php?loginFail=1');
        die(); //potato.
    }
    else //if we succeed, prepare to insert into the database
    {
        $query = "INSERT INTO user_file (username, user_password) VALUES (:userN, :passW);";

        $statement = $db->prepare($query);
        $statement->bindValue(":userN", $uName, PDO::PARAM_STR);
        $statement->bindValue(":passW", $pWord, PDO::PARAM_STR);
        $statement->execute();
        header('Location: index.php');
        die(); //potato.
    }
    
?>