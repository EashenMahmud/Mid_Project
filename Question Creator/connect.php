<?php
    
    $connection = mysqli_connect('127.0.0.1', 'root', '', 'login'); 

    if($connection)
    {
        //echo "connection established";
    }
    else{
        die("connection failed because ".mysqli_connect_error());
    }


?>