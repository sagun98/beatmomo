
<?php

session_start();
include ("connect.php");

if (!empty($_POST)) {
	if (isset($_POST['username1'],$_POST['password1']))
	{

		$username1    = strtolower(trim($_POST['username1']));
		$password1 	  = strtolower(trim($_POST['password1']));


		if (!empty($username1)  && (!empty($password1)) )
		{	
			$sql = "SELECT id,username,password FROM signup WHERE username=? AND password=?" ; 
			$stmt= $db->prepare($sql);
			$stmt-> bind_param('ss',$username1,$password1);
			$stmt-> execute();
			$stmt-> bind_result($id,$username,$password);

			if($stmt->fetch()) {
				$_SESSION['username'] = $username;
				
				$_SESSION['login_status']= true;

				header ('Location: user.php');


			}	
			else {
				echo "User credential not found";
			}	

		}
		else {
			echo "Field empty";
			 }

		}
	}	


?>




<!DOCTYPE html>

<html>
	<head>
		<title>The Spider</title>
	</head>
<body>

<h1>Admin Access </h1>
	<h3>SIGN IN </h3>
	<form action= "" method="post">
		<div class="field">
			<label for="username"> Username </label>
			<input type="text" name="username1" id="username1" autocomplete="off">
		</div>	

		
		<div class="field">
			<label for="password"> Password </label>
			<input type="password" name="password1" id="password1" autocomplete="off">
		</div>	

		
		<div>
			<input type="submit"  value= "Sign in" >		
		</div>	


	</form>