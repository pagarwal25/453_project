<?php
$isUsernameValid=false;
$isPwdValid=false;
$isemailValid=false;


if(isset($_GET['validatenewUser']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$zip=$_POST['zip'];
	$telephone=$_POST['telephone'];

	if($username!=""){
		$isUsernameValid=true;
	}
	if($password!=""){
		$isPwdValid=true;
	}
	if(strpos($email,'@')!==FALSE  && $email!==""  && strpos($email,'.')!==FALSE)
	{
				
		$isemailValid=true;
		
	}


	if($isUsernameValid && $isPwdValid && $isemailValid){
		header('Location: listingPage.html.php?username='.urlencode($username));
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
			  <h4 class="modal-title">Invalid Sign up details</h4>
			</div>
			<div class="modal-body">
			  <p>Please enter all the details correctly</p>
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

<!doctype html>
<html>
    <head>
        <style>
 
           body{font-family:Verdana;}
		   td {  padding: 15px;} 
		   .inputStyle{
    border-radius: 7px;
	box-shadow:inset 0 0 7px #D4D4D4;
	
	height: 40px;
	font-size: 0.8em;
	border: 1px solid #D4D4D4;
	width:300px ;
}
input:focus {outline:none;}

.inputStyleSubmit{
    border-radius: 7px;
	background-color:#FF8732;
	color:white;
	height: 40px;
	font-size: 0.8em;
	border: 1px solid #FF8732;
	width:200px ;
	cursor:pointer;
	
}
        </style>
    </head>
    <body>
        <center>
            <form action="?validatenewUser" method="POST">
                <h2>Fill the form to become a member:</h2>
                <table>
				<tr>
				<td><label for="username">Username *: </label></td>
				<td><input class="inputStyle type="text" id="username" name="username" /></td>
				</tr>
                <td><label for="password">Password *: </label></td><td><input class="inputStyle" type="password" id="password" name="password"/></td>
				</tr>
                <!-- You may want to consider adding a "confirm" password box also -->
                
                             
                <tr>
				<td><label for="email">Email *: </label></td><td><input class="inputStyle type="email" id="email" name="email"/></td>
				</tr>
				
                <!-- Valid input types: http://www.w3schools.com/html5/html5_form_input_types.asp -->
                <tr>
				<td><label for="tel">Telephone: </label></td><td><input class="inputStyle type="text" id="tel" name="telephone"/></td>
				</tr>
                
                <tr>
				<td><label for="zip">Post Code: </label></td><td><input class="inputStyle type="text" id="zip"  name="zip"/></td>
				</tr>
                <tr>
				<td></td>
				<td align="right"><input class="inputStyleSubmit" type="submit" value="Submit" /></td></tr>
 </table >
                <p>Note: Please make sure your details are correct before submitting form and that all fields marked with * are completed!.</p>
          
		   </form>
		   </center>
        
    </body>
</html>
