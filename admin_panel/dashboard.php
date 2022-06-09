<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        session_start();
        if (isset($_SESSION['user'])) {
            echo 'Hi ' . $_SESSION['user'] . ', welcome to your page.<br>';
        ?>
            <a href="logout.php">Logout</a>
        <?php
        } else {
            header("Location:login.html");
        }
        ?>
    </div>
</body>

</html>