<?php
	session_start();
	if(!isset($_SESSION['adminName'])) {
		header("Location:index.php");
	} else { 
	?>
<html>
<head>
	<title>Users List</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
<!--	<link rel="stylesheet" href="css/style2.css">-->
</head>
<body>
<h1 style="text-align:center;">Users List</h1>
	<table class="table table-stripped table-bordered table-hover">
	<tr>
		<th>Name</th>
		<th>State</th>
		<th>City</th>
		<th>Color Voted</th>
	</tr>
	<?php
		
		include_once('dbh.php');
		
		$query = "SELECT * FROM users;";
		$res = mysqli_query($con,$query);
		

		while($row = mysqli_fetch_assoc($res)) {
			
		?>
		
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['state']; ?></td>
			<td><?php echo $row['city']; ?></td>
			<td><?php echo $row['color_voted']; ?></td>
		</tr>	
			
			<?php
		}
	
	?>
	</table>
	
	
</body>
</html>
<?php 
	}
?>