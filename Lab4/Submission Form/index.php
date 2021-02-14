<!DOCTYPE html>
<html>
<head>
	<title>Submission Form</title>
</head>
<body>
	 <?php
	 		$uname = "";
	 		$err_uname = "";
	 		$password = "";
	 		$err_password="";
	 		$ugender = "" ;
	 		$err_ugender = "" ;
	 		$uhobbies = "" ;
	 		$err_uhobbies = "" ;
	 		$ubio = "" ;
	 		$err_ubio = "" ;
	        if($_SERVER["REQUEST_METHOD"] == "POST")
	 		{
	 			if (empty($_POST["name"])) 
	 			{
	 				$err_uname = "Username Required";
	 			}
	 			else if(strlen($_POST["name"])<6){
					$err_uname="*Username should be at least 6 characters";
				}
	 			else 
	 			{
	 				$uname = $_POST["name"] ;
	 			}
	 			if (empty($_POST["pass"])) 
	 			{
	 				$err_password = "Password Required";
	 			}
	 			else 
	 			{
	 				$password = $_POST["pass"] ;
	 			}
	 			if (!isset($_POST["gender"])){
                    $err_ugender=   "Select a gender  ";
                }
				else{
					if (isset($gender) && $gender=="Male"){
						$ugender=$_POST["gender"];
					}
					else{
						if (isset($gender) && $gender=="Female"){
							$ugender=$_POST["gender"];
						}
				    }
				}
				if(empty($_POST["hobbies"])){
                    $err_uhobbies="this field is required";
                        
                 }
                
				else {
                    $uhobbies =$_POST["hobbies"];
                }
				if(empty($_POST["bio"])){
					$err_ubio ="Enter a text ";
				}
				else{
					$ubio=$_POST["bio"];
				}

        }
	
	 		
	?>
	<form action="" method="post">
		<table>
			<tr>
				<td><label>User name </label></td>
				<td>:<input type="text" placeholder="Username" value="<?php echo $uname;?>" name="name"><span><?php echo $err_uname;?></span></td>
			</tr>
			<tr>
				<td><label>Password </label></td>
				<td>:<input type="password" placeholder="password" value="<?php echo $uname;?> name="pass"><span><?php echo $err_password;?></span></td>
			</tr>
			<tr>
				<td><label>Gender </label></td>
				<td>:<input type="radio" value="Male" name="gender">Male
					 <input type="radio" value="Female" name="gender">Female
				</td>
			</tr>
			<tr>
				<td><label>Hobbies :</label></td>
				<td><input type="checkbox" value="Movies" name="hobbies[]">Movies<br>
					<input type="checkbox" value="Music" name="hobbies[]">Music<br>
					<input type="checkbox" value="Games" name="hobbies[]">Games<br>
				</td>
			</tr>
			<tr>
				<td><label>Profession</label></td>
				<td>:<select name="profession">
					<option>Teaching</option>
					<option>Driving</option>
					<option>Service</option>
				</select>
				</td>
			</tr>
			<tr>
				<td><label>Bio </label></td>
				<td>:<textarea name="bio"></textarea></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>