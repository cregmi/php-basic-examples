<?php
    //Database credentials
    $servername = "127.0.0.1";
    $username = "root";
    $password = "password";
    try
    {
	    $pdo = new PDO("mysql:host=$servername;dbname=records", $username, $password);
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    echo "Connected successfully". "</br>";
    }
    catch(PDOException $e)
    {
	    echo "Connection to the database failed: " . $e->getMessage();
        exit;
    }
?>