<?php
	session_start();
	if(!isset($_SESSION['adminName'])) {
		header("Location:index.php");
	} else { 
	?>
<html>
	<head>
		<title>
			Result
		</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
	</head>
	<body>
		<h1 style="text-align:center;">Result</h1>
		<table class="table table-stripped table-bordered table-hover">
	<tr>
		<th>SL.No</th>
		<th>COLOUR</th>
		<th>VOTES</th>
	</tr>
	<?php
		
		include_once('dbh.php');
		
		$query = "SELECT * FROM color_votes;";
		$res = mysqli_query($con,$query);
		

		while($row = mysqli_fetch_assoc($res)) {
			
		?>
		
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['color_name']; ?></td>
			<td><?php echo $row['vote_count']; ?></td>
		</tr>	
			
			<?php
		}
	
	?>
	</table>
	
	<?php 
		$sql="SELECT vote_count FROM color_votes WHERE color_name='red';";
			$red_res = mysqli_query($con, $sql);
			$row_red = mysqli_fetch_assoc($red_res);
//			echo $row_red['vote_count'];
			
			$sql="SELECT vote_count FROM color_votes WHERE color_name='yellow';";
			$yellow_res = mysqli_query($con, $sql);
			$row_yellow = mysqli_fetch_assoc($yellow_res);
//			echo $row_yellow['vote_count'];
			
			$sql="SELECT vote_count FROM color_votes WHERE color_name='green';";
			$green_res = mysqli_query($con, $sql);
			$row_green = mysqli_fetch_assoc($green_res);
//			echo $row_green['vote_count'];
				
				$sum= $row_red['vote_count'] + $row_yellow['vote_count'] + $row_green['vote_count'];
				
				echo "Total Votes:" . $sum;
				echo "<br>";
		$per_red= ($row_red['vote_count'] / $sum) * 100;
				echo "Percentage red votes". $per_red ."<br>";
				$per_yellow= ($row_yellow['vote_count'] / $sum) * 100;
				echo "Percentage yellow votes". $per_yellow ."<br>";
				$per_green= ($row_green['vote_count'] / $sum) * 100;
				echo "Percentage green votes". $per_green ."<br>";
				
				
				$_SESSION['red'] = floor ($per_red);
				$_SESSION['yellow'] = floor ($per_yellow);
				$_SESSION['green'] = floor ($per_green);
		
		?>
		
	</body>
</html>
<?php 
	}
?>