<?php
    $person = $_POST['name'].",".$_POST['email']."\r\n";

    $file = "data.txt";
    
    if(file_put_contents($file, $person, FILE_APPEND | LOCK_EX) != FALSE){
        echo $person." added to the server file!!";
    }
    else{
        echo "Something went wrong";
    }
?>