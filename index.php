<html>
	<head>
		<title>
			Voting
		</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	<div class="corner-button">
	<h1><a href="" style="text-decoration: none;" data-toggle="modal" data-target="#login">Admin Login</a></h1>
	</div>
	<header>
		<h1>Vote For Your Favourite Colour</h1>
	</header>
	<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Log in</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
				</div>
				<form action="login.php" method="post">
					<div class="modal-body">

						<input type="Email" style="width:98%; padding: 2%; margin:2%;"  name="email" class="input" Placeholder="Email"><br>

						<input type="Password" style="width:98%; padding: 2%; margin:2%;" name="pass1" class="input" placeholder="&bull; &bull; &bull; &bull; &bull; &bull; ">

						<div class="forgot-pass">
							<p><a href="#">Forgot Password?</a></p>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" name="loginBTN" class="btn btn-success">Login</button>
<!--						<button type="button" class="btn btn-primary">New User? Register</button>-->
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="container">
		<h1>Choose Your Favourite Color</h1>
		<p>*Note: Fill the information and complete the survey</p>
		<form action="submit.php" method="post">
			<div class="sub-container">
				<label for="name">Name</label>
				<input type="text" name="name" placeholder="Enter Your Full Name" required>
				
				<div class='resp_code frms'>
      				<p align='center'>
					  <div id="selection">
						<select id="listBox" onchange='selct_district(this.value)' name="state" required></select>
						<select id='secondlist' name="city" required></select>
					  </div>
      
   					 </div>
					
					<div class="color">
						<label >
							<input name="color" type="radio" checked value="Red" />
							<span>Red</span>
						  </label>
					
				
						<label >
							<input name="color" type="radio" Value="Yellow" />
							<span>Yellow</span>
						  </label >
					
					
						<label >
							<input class="with-gap" name="color" type="radio"  value="Green" />
							<span>Green</span>
						  </label>
				</div>
						<button type="submit" name="submit">Submit</button>
			</div>
			</form>
			</div>
		<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
		<script language="Javascript" src="jquery.js"></script>
    	<script type="text/JavaScript" src='state.js'></script>
		
	</body>
</html>