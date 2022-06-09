<?php
        session_start();
        $user = "root";
            $server = "localhost";
            $pass = "";
            $dbname ="information";
            $con = mysqli_connect($server, $user, $pass, $dbname);
            if(!$con){
                    die("Not Connected".mysqli_connect_error());
            }
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if ($user != '' && $pass != '') {
            
            echo $sql = "SELECT * FROM user where user ='$user' ";
            $result = mysqli_query($con,$sql);
             if (mysqli_num_rows($result) > 0) {
                $row =mysqli_fetch_assoc($result);
                if ($row['pwd'] == $pass) {
                        $_SESSION['user'] = $user;
                        header("Location:dashboard.php");
                } else {
                        echo 'Incorrect password';
                }
            } 
            else {
                    echo 'Incorrect username';
             }
        }
?>