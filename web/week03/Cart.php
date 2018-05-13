<?php
    session_start();

    // obtain variables through post, then add them to the php map
    $price = $_POST['product'];
    $productNumber = $_POST['itemNumber'];
    $priceFloat = (float) $price;
    // If there is no map, create one
    if (!isset($_SESSION["cartMap"]))
    {
        // If there is a price being given and there is no map, create the map
        if (isset($price)){
            $_SESSION["cartMap"] = array($productNumber => $priceFloat);            
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Your Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Assign03Style.css" />
</head>
<body>
    <?php include "Header.php"; ?>
    <div id="cartBox">
        <?php
            echo (var_dump($_SESSION["cartMap"]));
        ?>
    </div>
</body>
</html>