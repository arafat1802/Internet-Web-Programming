<html>
	<head>
		<title>Teacher's Profile</title>
		<style>
			table, th, td{
				border: 1px solid black;
			}
		</style>
	</head>
	<body>
		<table>
			<?php
				$user = "root";
				$pass = "";
				$server="localhost";
				$dbname="Teacher";
				$con = mysqli_connect($server, $user, $pass, $dbname);
				$sql = "SELECT * FROM `teacher`";
				$result = mysqli_query($con,$sql);
				?>
				<table>
					<tr>
						<td>ID</td>
						<td>Name</td>
						<td>Faculty</td>
						<td>Depertment</td>
						<td>Salary</td>
						<td>Email</td>
						<td>Mobile No.</td>
						<td>Designation</td>
						<td>Action</td>
					</tr>
				<?php if(mysqli_num_rows($result) > 1){
					while($row = mysqli_fetch_assoc($result)){?>
							<tr>
								<td><?php echo $row['id'];?></td>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['faculty'];?></td>
								<td><?php echo $row['dept'];?></td>
								<td><?php echo $row['salary'];?></td>
								<td><?php echo $row['email'];?></td>
								<td><?php echo $row['mobileno'];?></td>
								<td><?php echo $row['desig'];?></td>
								<td><a href = "update.php?id=<?php echo $row['id'];?>">Edit</td>
							</tr>
					<?php
					}

				}
			?>
			</table>
		
	</body>
</html>