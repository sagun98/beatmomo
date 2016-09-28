<?php
session_start();
include ("connect.php");

if (!empty($_POST)) {
	if (isset($_POST['username'],$_POST['password']))
	{

		$username    = strtolower(trim($_POST['username']));
		$password 	  = strtolower(trim($_POST['password']));


		if (!empty($username)  && (!empty($password)) )
		{	
			$sql = "SELECT id,username,password FROM signin WHERE username=? AND password=?" ; 
			$stmt= $db->prepare($sql);
			$stmt-> bind_param('ss',$username,$password);
			$stmt-> execute();
			$stmt-> bind_result($id,$username,$password);

			if($stmt->fetch()) {
				$_SESSION['login_status']=true;
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
<html>
	<head>
		<title>The admin</title>
	</head>
<body>

<h1>Admin Access </h1>
	<h3>SIGN IN </h3>
	<form action= "" method="post">
		<div class="field">
			<label for="username"> Username </label>
			<input type="text" name="username" id="username" autocomplete="off">
		</div>	

		
		<div class="field">
			<label for="password"> Password </label>
			<input type="password" name="password" id="password" autocomplete="off">
		</div>	

		
		<div>
			<input type="submit"  value= "Sign in" >		
		</div>	


	</form>
	</html>