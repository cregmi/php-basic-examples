<?php
    $id = $_GET['id'];

    switch($id)
    {
        case 1:
            $message = "Welcome to page 01";
            break;
        case 2:
            $message = "Welcome to page 02";
            break;
        case 3:
            $message = "Welcome to page 03";
            break;
        default:
            $message = "You are lost";

    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>

    <body>
        <h1><?=$message?></h1>
        <a href="links.html">go back</a>
    </body>


</html>
