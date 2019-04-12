<?php session_start();?>


	<?php

	if(isset($_POST['submit'])){
		
		include_once('dbh.php');
		$name = $_POST['name'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$color = $_POST['color'];
	
		$query= "INSERT INTO users (name,state,city,color_voted) VALUES ('$name','$state','$city','$color');";
		
		$result= mysqli_query($con, $query);
		
		if(!$result){
			echo "Error! Vote Again!";
		}
		else{
			$updateQuery = "SELECT * FROM state_list WHERE state_name= '$state';";
			$updateRes = mysqli_query($con, $updateQuery);
			if($updateQuery) {
				
			$row = mysqli_fetch_assoc($updateRes);
			
			$green = $row['green_count'];
			$red = $row['red_count'];
			$yellow = $row['yellow_count'];
				
			switch($color) {
				case 'Red':
					$red += 1;
					break;
				case 'Green':
					$green += 1;
					break;
				case 'Yellow':
					$yellow += 1;
					break;
			}	
				
			$queryUpdate = "UPDATE state_list SET green_count='$green', yellow_count='$yellow', red_count = '$red' WHERE state_name = '$state';";
				
			$updateRes = mysqli_query($con, $queryUpdate);
			if($updateRes) {
					$query = "SELECT COUNT(color_voted) FROM users WHERE color_voted='$color';";
			$result=  mysqli_query($con, $query);
			
			$row = mysqli_fetch_assoc($result);
			$count = $row['COUNT(color_voted)'];

			$query = "UPDATE color_votes SET vote_count = '$count' WHERE color_name='$color';";
			
			$result = mysqli_query($con,$query);
			if($result) {
			$sum=0;	
	
			$sql="SELECT vote_count FROM color_votes WHERE color_name='red';";
			$red_res = mysqli_query($con, $sql);
			$row_red = mysqli_fetch_assoc($red_res);
			
			$sql="SELECT vote_count FROM color_votes WHERE color_name='yellow';";
			$yellow_res = mysqli_query($con, $sql);
			$row_yellow = mysqli_fetch_assoc($yellow_res);
			
			$sql="SELECT vote_count FROM color_votes WHERE color_name='green';";
			$green_res = mysqli_query($con, $sql);
			$row_green = mysqli_fetch_assoc($green_res);
				
				$sum= $row_red['vote_count'] + $row_yellow['vote_count'] + $row_green['vote_count'];
				
				echo "Total Votes:" . $sum;
				echo "<br>";
		   		echo "Votes on Red:" . $row_red['vote_count'];
				echo "<br>";
		   		echo "Votes on Yellow:" . $row_yellow['vote_count'];
				echo "<br>";
		   		echo "Votes on Green:" . $row_green['vote_count'];
				
				$per_red= ($row_red['vote_count'] / $sum) * 100;
				echo "<br>";
				$per_yellow= ($row_yellow['vote_count'] / $sum) * 100;
				echo "<br>";
				$per_green= ($row_green['vote_count'] / $sum) * 100;
				echo "<br>";
				
				
				$_SESSION['red'] = floor ($per_red);
				$_SESSION['yellow'] = floor ($per_yellow);
				$_SESSION['green'] = floor ($per_green);
				
				$_SESSION['sum'] = $sum;
				header('Location: test.php');

		}
			}
			}
			
			
		
	}
		
		
		
		
	}


?>
