<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <script src="main.js"></script>
</head>
<body>
<form class="login-form" action="page2.php">
    <input type="submit" name="Bookings" value="Bookings" onclick=Btn(bookings);>
    <input type="submit" name="Facilities" value="Facilities" onclick=Btn(facilities);>
    <input type="submit" name="Members" value="Members" onclick=Btn(members);>
</form>
<?php
    function Btn($value) {
        //J'ai essayé de faire en sorte que les boutons appellent une fonction qui recharge la page tout en envoyant les mots clé pour accéder a la base de donné sans succes
        $_SESSION['table'] = $value;
        echo 'test1';
        require 'PDO.php';
        require 'page2.php';
    };
?>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
</body>
</html>