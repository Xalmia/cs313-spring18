<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="validLogin.php" method="POST">
        Username: <input type="text" name="username"> <br>
        Password: <input type="password" name="password"> <br>
        <input type="submit" value="Login"> <br>
    </form>
    <a href="register.php">Register Here!</a>
</body>
</html>