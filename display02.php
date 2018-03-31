<?php    
    $page = file_get_contents('data.txt');
    $line = explode("\n",$page);
    for ($i = 0; $i < count($line)-1; $i++)
    {
        $row = explode(",",$line[$i]);
        echo '<p>Name: <b>'.$row[0].'</b> | Email: <u>'.$row[1].'</u></p>';
    }
    echo '------------main php ends--------------';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <p>--------------main HTML starts------------</p> 
        <?php

            for ($i = 0; $i < count($line)-1; $i++)
            {
                $row = explode(",",$line[$i]);
        ?>
                <p>Name: <b><?=$row[0]?></b> | Email: <u><?=$row[1]?></u></p>    
        <?php
            }
        ?>
    
           
        
        <h4><?=count($line)-1?> records found</h4>     
    </body>
</html>
