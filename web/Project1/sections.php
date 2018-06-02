<?php
    require("dbConnect.php");

    $db = get_db();

    if (!isset($db)){
        die("Database Connection was not set.");
    }

    $query = "SELECT section_id, section_title FROM section_in_journal";
    $statement = $db->prepare($query);

    // bind variables if necessary
    $statement->execute();
    $journal = $statement->fetchAll(PDO::FETCH_ASSOC);
?>