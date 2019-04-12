<?php
	if(isset($_POST['loginBTN'])){
		include_once('dbh.php');
		
		$email = $_POST['email'];
		$pass1 = $_POST['pass1'];
		$password= $pass1;
		$query="SELECT * FROM admin WHERE email='$email' AND password = '$password';";
	
		$result = mysqli_query($con, $query);
			if(!mysqli_num_rows($result)==1) {
				echo 'Something went wrong';
			} else {
				$row = mysqli_fetch_assoc($result);
				
				//Start a session so we can store the admin's session 
				session_start();
				$_SESSION['adminName'] = $row['name'];
				
				
				header("Location: admin.php");
			}
		
		}
		
		
		
								 
?>
