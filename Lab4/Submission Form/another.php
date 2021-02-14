<!DOCTYPE html>
<html>
<head>
	<title>Another Php</title>
</head>
<body>
		<h1>Form Submitted</h1>
		<?php
			 $uname = "";
			 $err_uname = "";
			 $password = "";
			 $err_password = "";
			 if($_SERVER["REQUES_METHOD"]=="POST")
			 {
			 	if(empty($_POST["uname"]))
			 	{
			 		$err_uname ="Username Required" ;
			 	}
			 	else if(strlen($_POST["uname"])<6)
			 	{
			 		$err_uname ="Username should be atleast 6 characters" ;	
			 	}
			 	else 
			 	{
			 		$uname = $_POST["uname"] ;
			 	}

			 	if(empty($_POST["pass"]))
			 	{
			 		$err_uname ="Passoword Required" ;
			 	}
			 	else 
			 	{
			 		$password = $_POST["pass"] ;	
			 	}
			 	
			 }
			 /*
			 echo "Name: ". $_GET["uname"]. "<br>";
			 echo "Password: ". $_GET["upass"]. "<br>";
			 echo "Gender: ". $_GET["gender"]. "<br>";
		     echo "Profession: ". $_REQUEST["profession"]. "<br>";
 			 echo "Bio: ". $_REQUEST["bio"]. "<br>";
 			 $v = $_GET["hobbies"] ;
 			 for($i=0;$i<count($v);$i++)
 			 {
 			 	echo $v[$i]. "<br>";
 			 }*/	
		?>
</body>
</html>