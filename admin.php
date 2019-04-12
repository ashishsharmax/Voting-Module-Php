<html>	
	<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style2.css">
		<title>ADMIN PAGE</title>
	</head>
<body>

	<div class="corner-button">
	<h1><a href="logout.php" style="text-decoration: none;"> Log Out</a></h1>
	</div>
	<?php
	session_start();
	if(!isset($_SESSION['adminName'])) {
		header("Location:index.php");
	} else { ?>
	<h1 style="color: white; padding: 25px;"><?php echo 'Welcome back, ' .$_SESSION['adminName'].'!'; ?></h1>
	<?php
	}
 
    ?>
    <div class="container">
    	<div class="row">
    		<div class="col-md-4"><div class="inside"><a href="get_user.php">Get Users List</a></div></div>
    		<div class="col-md-4 get"><div class="inside"><a href="get-result.php">Get Result</a></div></div>
    		<div class="col-md-4 get"><div class="inside"><a href="state.php">Get List By State</a></div></div>
    	</div>
    </div>
			
</body>

</html>