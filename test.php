<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
	<style>
		table {
			background: #ddd;
			padding: 10px;
/*			background: black;*/
		}
		table tr {
			padding: 10px;
			border-bottom:  solid 2px #000;
		}
		td,th {
			text-transform: uppercase;;
			padding: 30px
		}
		td{
			color: crimson;
			font-weight: bold;
		}
		#table{
			margin-top: 150px;
			width: 100%;
		}
/*
		.row > .percentage{
			background: red !important;
			color: white;
			
		}
		
*/
		 h1{
			color: darkred;
			 font-family: cursive;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
	<h3 style="padding-top:90px; text-align:center; color: blue;">Thanks for submitting your response! Here Are Results till Now!</h3>
	<div class="row">
	<div class="col-md-6" id="table">
	
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
		</div>
		<div class="col-md-6" class="percentage" style="">
			
	<h1 style=" margin-top: 150px; margin-left: 50px;"><?php session_start(); echo 'Total Votes:'. " ".$_SESSION['sum']; ?></h1>
	<h1 style="margin-left: 50px;"><?php  echo 'Percentage Of RED votes:'." ".$_SESSION['red']; ?></h1>
	<h1 style="margin-left: 50px;"><?php  echo 'Percentage Of YELLOW votes:'." ".$_SESSION['yellow']; ?></h1>
	<h1 style="margin-left: 50px;"> <?php  echo 'Percentage Of GREEN votes:'." ".$_SESSION['green']; ?></h1>
		</div>
		</div>
	</div>
</body>
</html>