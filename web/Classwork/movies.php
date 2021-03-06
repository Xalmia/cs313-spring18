<?php
try
{
    require("dbConnect.php");
    $db = get_db();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Movies</h1>

    <ul>
        <?php
        $user_rating = $_GET["rating"];
        $query = "SELECT m.title, m.year, r.code FROM movies m INNER JOIN ratings r ON m.rating_id = r.id WHERE r.code = :rating";
        $statement = $db->prepare($query);
        $statement->bindValue(":rating", $user_rating, PDO::PARAM_STR);
        $statement->execute();
        $movies = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($movies as $movie)
        {
            $title = $movie["title"];
            $year = $movie["year"];
            $rating = $movie["code"];
            
            echo "<li>$title ($year) - Rated $rating</li>";
        }
        ?>
    </ul>

</body>
</html>