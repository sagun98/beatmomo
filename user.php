<?php  
session_start();
include ("connect.php");

if ($_SESSION['login_status']==true){
	$sql = "SELECT id,name,email,phone FROM players " ; 
			$stmt= $db->prepare($sql);
			$stmt-> execute();
			$stmt-> bind_result($id,$name,$email,$phone);

			echo "<h3>Man vs MoMo Candidates:</h3>";

$i=0;
				while($stmt->fetch()){
					$i++;
				
				
				echo $i.")"." "."Name: ".$name;
				echo "<br>";
				echo "Email: ".$email;
				echo "<br>";
				echo "Phone: ".$phone;
		
				echo "<br>";
				echo "<br>";
			
}
}
else{


	echo "failed";
			}	

			?>