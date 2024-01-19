<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "discord";

    $conn = mysqli_connect($serverName,$userName,$password,$database);

    if(!$conn){
        die("The database is not connected".mysqli_connect_error());
    }else{
       
    }

    


?>