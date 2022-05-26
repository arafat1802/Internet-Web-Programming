<html>
<head>
	<style>
		table , th, td {
			border: 1px solid black;
		}
	</style>
</head>
<?php
	$user = "root";
	$pass = "";
	$server="localhost";
	$dbname="Teacher";
	$id = $_GET['id'];
	$con = mysqli_connect($server, $user, $pass, $dbname);
	$sql = "SELECT * FROM `teacher` where id=$id";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
?>
	<body>
		<form action= "edit.php" method="POST">
			<table>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name" id="name" value='<?php echo $row['name'];?>'></td>
				</tr>
				<tr>
					<td>Faculty: </td>
					<td><input type="text" name="facul" id="facul" value='<?php echo $row['faculty'];?>'></td>
				</tr>
				<tr>
					<td>Depertment: </td>
					<td><input type="text" name="dept" id="dept" value='<?php echo $row['dept'];?>'></td>
				</tr>
				<tr>
					<td>Salary: </td>
					<td><input type="text" name="salary" id="salary" value='<?php echo $row['salary'];?>'></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="text" name="email" id="email" value='<?php echo $row['email'];?>'></td>
				</tr>
				<tr>
					<td>Mobile No: </td>
					<td><input type="text" name="mobileno" id="mobileno" value='<?php echo $row['mobileno'];?>'></td>
				</tr>
				<tr>
					<td>Designation: </td>
					<td><input type="text" name="desig" id="dsig" value='<?php echo $row['desig'];?>'></td>
				</tr>
				<tr>
					<td>Submit : </td>
					<td><input type="submit" name="Update" value="Update"></td>
					<input type="text" name="id"  value="<?php echo $row['id'];?>" hidden>
				</tr>
</table>
</form>
</body>	
</html>
