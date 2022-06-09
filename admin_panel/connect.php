<?php
    $user = "root";
    $server = "localhost";
    $pass = "";
    $dbname ="information";
    $con = mysqli_connect($server, $user, $pass, $dbname);
    if(!$con){
        die("Not Connected");
    }
?>