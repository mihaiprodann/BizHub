<?php
    include "credentials.php";
    $connection = mysqli_connect($server, $username, $password, "bizhub");

    if($connection) {
        session_start();
    }
    else
        echo "Connection Failed";
    
?>