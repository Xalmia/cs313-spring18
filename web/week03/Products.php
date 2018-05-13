<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Legitimate Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Assign03Style.css" />
    <script src="Assign03Script.js"></script>
</head>
<body>
<?php include 'Header.php'; ?>
    <div id="ProductBox">
        <table>
            <?php
                $timesPrinted = 0;            
                //Loop through the Cutibase to display the products
                for ($i = 1; $i < 6; $i++)
                {
                    //pick a random float whole number here!
                    $priceCalc = $i + .99;
                    //print gifs

                    if ($timesPrinted == 0 || !($timesPrinted % 4))
                    {
                        echo "<tr>";
                    }

                    echo "<td align='center'><div id='item' class='product'>
                        <span class='product-title'>Product $i</span>
                        <img src='Cutibase/Product ($i).gif' alt='Product ($i) gif'
                        height='200px' width='200px'>
                        <div id='price$i' class='price'>
                            <form action='Cart.php' method='POST'>
                                $$priceCalc 
                                <input type='hidden' value='$priceCalc' name='product' readonly>
                                <input type='hidden' value='$i' name='itemNumber' readonly>
                                <input type='submit' value='Add To Cart' name='submitproduct$i' class='button'>
                            </form>
                        </div>
                    </div></td>";
                    $timesPrinted++;
                    if (!($timesPrinted % 4) || $timesPrinted == 5)
                    {
                        echo "</tr>";
                    }
                }
            ?>
        </table>
    </div>
</body>
</html>