<?php
    $user = "root";
    $server = "localhost";
    $pass = "";
    $dbname ="information";
    $con = mysqli_connect($server, $user, $pass, $dbname);
    if(!$con){
        die("Not Connected");
    }
    
    extract($_POST);
    echo $user;
    echo $pwd;
    $sql = "INSERT INTO user 
    VALUES ('$user', '$pwd')";
    if (mysqli_query($con, $sql)) {
        echo "Registration Succesfully\n";
    }
    else {
        echo "Man there is a problem";
    }
    
?>
<a href="login.html" alt="NO Login Page">login here</a>