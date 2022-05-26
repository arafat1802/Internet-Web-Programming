<?php
	$user = "root";
	$pass = "";
	$server="localhost";
	$dbname="Teacher";
	$con = mysqli_connect($server, $user, $pass, $dbname);
	$name = $_POST['name'];
	$dept = $_POST['dept'];
	$facul = $_POST['facul'];
	$mobileno = $_POST['mobileno'];
	$email = $_POST['email'];
	$desig = $_POST['desig'];
	$salary = $_POST['salary'];
	$sql = "UPDATE teacher SET name = '$name', faculty = '$facul', dept = '$dept', salary = '$salary', email = '$email', mobileno = '$mobileno', desig = '$desig' WHERE id = '$id'";
	if(isset($_POST['Update'])){
		if(mysqli_query($con,$sql)){
			echo "updated";
			header('Location:show.php');
		}
		else {
			echo "Not updated";
			//header('Location:action.php');
		}
	}
?>