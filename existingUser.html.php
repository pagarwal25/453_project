<html>
<head>
<script type="text/javascript" src="js/Validation.js"></script>
	<title>Cozy Homes' - Existing User</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<style>
	body{
		background-size: cover;
	}
	</style>
<head>
<body a link="black" vlink="black">
<!--<div id="bg">
  <img id="myimage" src="/COMP453_DatabaseProgramming/453_test/images/sample3.jpg" alt="">
        </div> -->

<div id="divStyle">
		<center><h1>Cozy Homes'</h1></center>
<!--Menu -->

<div id= "menuStyle">
<center><a href="index.html">Home</a> | <a href="newUser.html.php">New-User</a> | <b> Existing-User</b> | <a href="administrator.html">Administrator</a> | <a href="aboutUs.html">About US</a></center>
</div>

<br/>
<center>

<h3>Sign-In to check your favorite homes</h3>
  <div id="formStyle">
<form action="?validateUser" method="POST">
 
		<input class ="inputStyle" type="text" id="username" name="username" placeholder=" Enter Username">
		<br/>
		<br/>
		<input class ="inputStyle" type="text" id="password" name="password" placeholder=" Enter Password">	
		<br/>
		<br/>
		<input class ="inputStyleSubmit" type="Submit" id="submit" value="submit">
		
</form>
</div>


</center>
</div>
</body>
</html>

<?php
if(isset($_GET['validateUser'])){

$username=$_POST['username'];
$password=$_POST['password'];
//$password= password_hash($password,PASSWORD_DEFAULT);

try{



$pdo = new PDO('mysql:host=localhost;dbname=cozy_homes', 'statavarthy', 'tata1988');


	

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');
	
}

catch(PDOException $e){
	$error = 'Unable to connect to server ';
	include 'error.html.php';
	exit();
}



$sql = 'select Password from userdetails where Exists (select username from userdetails where UserName=:username)';



$s = $pdo->prepare($sql);
	$s->bindValue(':username', $username);
    $s->execute();
	$result = $s->fetch();
	$password_db = $result['Password'];

//($password_db == $password)
if (password_verify($password,$password_db))
{
header('Location: listingPage.html.php?username='.urlencode($username));
//include 'listingPage.html.php';
 // header('Location: listingPage.html.php'.$username);  
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
          <h4 class="modal-title">Incorrect Username or password</h4>
        </div>
        <div class="modal-body">
          <p>We are not able to validate your membership.</p>
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
