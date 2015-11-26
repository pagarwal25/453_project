<?php

if(isset($_GET['verifyUser']))

{
	$email=$_POST['email'];
	if(strpos($email,'@')!==FALSE  && $email!==""  && strpos($email,'.')!==FALSE )
	{	
		header('Location: processNewUser.html.php');
		
	}
	
	
	else
	{
	?>
		<!DOCTYPE html>
	<html lang="en">
	<head>
	<style>
	 p font{
		 cursor:pointer;
	 }
	 </style>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	<body>

	<div class="container">
		<center>
	  <p id="error" data-toggle="modal" data-target="#myModal"><font color="red">Error! Click here for details.</p>
	  <!-- Trigger the modal with a button -->
	  
		</center>
	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">No Valid email address found</h4>
			</div>
			<div class="modal-body">
			  <p>Please enter your correct email address</p>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">try again</button>
			</div>
		  </div>
		  
		</div>
	  </div>
	  
	</div>

	</body>
	</html>
		
	<?php
	
	}
}
?>

		<html>
		<head>
		<script type="text/javascript" src="js/Validation.js"></script>
			<title>Cozy Homes' - New User</title>
			<link rel="stylesheet" type="text/css" href="css/style.css">
		<head>
		<body a link="black" vlink="black">
		<center><h1>Cozy Homes'</h1></center>

		<!--Menu -->
		<center><a href="index.html">Home</a> | <b> New-User</b> | <a href="existingUser.html.php">Existing-User</a> | <a href="administrator.html">Administrator</a> | <a href="aboutUs.html">About US</a></center>
		<br/>

		<center>
		<h3>Register to save your favorite  homes</h3>
		<br/>
		<form action="?verifyUser" method="POST">
		 
				<input class ="inputStyle" type="text" id="email" name="email" placeholder="Enter email address">
				<br/>
				
				<!--
				<input class ="inputStyle" type="text" id="password" name="password" placeholder=" Create Password 5-15 characters long">	
				
				<br/>-->
				<br/>
				<input class ="inputStyleSubmit" type="Submit" id="submit" value="submit">
				
		</form>
		</center>
		</body>
		</html>
