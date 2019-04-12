<?php
	session_start();
	if(!isset($_SESSION['adminName'])) {
		header("Location:index.php");
	} else { 
	?>
<html>
	<head>
		<title>
			State list
		</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<body>
		
			<h1 style="text-align:center">List Of Votes StateWise</h1>
			<table class="table table-stripped table-bordered table-hover">
	<tr>
		<th>State</th>
		<th>Red Votes</th>
		<th>Yellow Votes</th>
		<th>Green votes</th>
	</tr>
	<?php
		
		include_once('dbh.php');
		
		$query = "SELECT * FROM state_list;";
		$res = mysqli_query($con,$query);
		

		while($row = mysqli_fetch_assoc($res)) {
			
		?>
		
		<tr>
			<td><?php echo $row['state_name']; ?></td>
			<td><?php echo $row['red_count']; ?></td>
			<td><?php echo $row['yellow_count']; ?></td>
			<td><?php echo $row['green_count']; ?></td>
		</tr>	
			
			<?php
		}
	
	?>
	
	</table>
	
		</body>
	</head>
</html>
<?php 
	} 
?>