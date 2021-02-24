
<html>
	<head></head>
	<body>
		<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$conpass="";
	$err_conpass="";
	$mail="";
	$err_mail="";
	$code="";
	$err_code="";
	$number="";
	$err_number="";
	$gender="";
	$err_gender="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$bio="";
	$err_bio="";
	$source="";
	$err_source="";
	
	
		if	($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if (empty($_POST["u_name"]))
			{
				$err_name="**Name Required";
			}
			else
			{
				$name=$_POST["u_name"];
			}
			
			if (strlen($_POST["u_uname"])<6)
			{
				$err_uname="Username length should be 6 or longer";
			}
			elseif(strpos($_POST["u_uname"]," "))
			{
				$err_uname="Space are not allowed";
			}
			else
			{
				$uname=$_POST["u_uname"];
			}
			if(strlen($_POST["u_pass"])<8)
			{
				$pass=$_POST["u_pass"];
			if ((!strpos($_POST["u_pass"],"#"))||(!strpos($_POST["u_pass"],"?")))
				{
				$err_pass="Password should be minimum 1 character like '?'or'#'";
				}
				for ($i=0;$i<strlen($_POST["u_pass"]);$i++)
				{
					if (ctype_lower($_POST["u_pass"][$i]))
					{
						break;
					}
					else
					{
						$err_pass="Password should be minimum 1 lower case ";
					}
				}
				for ($j=0;$j<strlen($_POST["u_pass"]);$j++)
				{
					if (ctype_upper($_POST["u_pass"][$j]))
					{
						break;
					}
					else
					{
						$err_pass="Password should be minimum 1 upper case ";
					}
				}
				for($k=0;$k<strlen($_POST["u_pass"]);$k++)
				{
					if(is_numeric($_POST["u_pass"][$k]))
					{
						break;
					}
					else
					{
						$err_pass="Password should be minimum 1 numeric character";
					}
				}
			}
			else
			{
				$err_pass="Password length must be 8 or longer";
			}	
			
			
			if($_POST["u_conpass"]!=$_POST["u_pass"])
			{
				$err_conpass="Password didn't matched";
			}
			else
			{
				$conpass=$_POST["u_conpass"];
			}
			
			if(strpos($_POST["u_mail"],"@"))
			{
				if(strpos($_POST["u_mail"],"."))
				 {$mail=$_POST["u_mail"];}
			}
			else
			{
			 	$err_mail="Email should be contain '@' and '.' sequentially";
			}
			
			if(!is_numeric($_POST["u_code"]))
			{
				$err_code="Code should be numeric";
			}
			else 
			{
				$number=$_POST["u_number"];
			}
			if(!is_numeric($_POST["u_number"]))
			{
				$err_number="Number should be numeric";
			}
			else
			{
				$number = $_POST["u_number"];
			}
			if (!isset($_POST["u_day"]))
			{
				$err_day="Day must be selected";
			}
			else
			{
				$day=$_POST["u_day"];
			}
			if (!isset($_POST["u_month"]))
			{
				$err_month="Month must be selected";
			}
			else
			{
				$month=$_POST["u_month"];
			}
			if (!isset($_POST["u_year"]))
			{
				$err_year="Year must be selected";
			}
			else
			{
				$year=$_POST["u_year"];
			}
			
			if (empty($_POST["u_bio"]))
			{
				$err_bio="Plase fill the text area";
			}
			else
			{
				$bio=$_POST["u_bio"];
			}
			
			
			
			if(!isset($_POST["u_gender"]))
			{
				$err_gender="Please select a gender";
			}
			else
			{
				$gender=$_POST["u_gender"];
			}
			
			if(!isset($_POST["u_source"]))
			{
				$err_source="Least 1 source have to be selected";
			}
			else
			{
				$source=$_POST["u_source"];
			}
		echo "Name: ".htmlspecialchars($_POST["u_name"])."<br>";
		echo "Password: ".htmlspecialchars($_POST["u_pass"])."<br>";
		
		}
?>

		<center>
		<form action="" method="post">
		<fieldset>
		<legend align="center">Club Member Registration</legend>
			<table>
				<tr>
					<td><lebel>Name</lebel></td>
					<td>:</td>
					<td><input type="text" name="u_name" value="<?php echo $name;?>"><td><lebel><?php echo $err_name;?></lebel></td>
				</tr>
				
				<tr>
					<td><lebel >Username</lebel></td>
					<td>:</td>
					<td><input type="text" name="u_uname" value="<?php echo $uname;?>"> </td><td><lebel><?php echo $err_uname;?></lebel></td>
				</tr>
				<tr>
					<td><lebel>Password</lebel></td>
					<td>:</td>
					<td><input type="password" name="u_pass" value="<?php echo $pass;?>"> </td><td><lebel><?php echo $err_pass;?></lebel></td>
				</tr>
				<tr>
					<td><lebel>Confirm Password</lebel></td>
					<td>:</td>
					<td><input type="password" name="u_conpass" value="<?php echo $conpass;?>"> </td><td><lebel><?php echo $err_conpass;?></lebel></td>
				</tr>
				<tr>
					<td><lebel>Email</lebel></td>
					<td>:</td>
					<td><input type="text" name="u_mail" value="<?php echo $mail;?>"> </td><td><lebel><?php echo $err_mail;?></lebel></td>
				</tr>
				<tr>
					<td><span>Phone</span></td>
					<td>:</td>
					<td><input type="text" name="u_code" value="<?php echo $code;?>" placeholder="Code" size="4">-<input type="text" name="u_number" value="<?php echo $number;?>" placeholder = "Number" size="10"> </td><td><lebel><?php echo $err_code;?></lebel><lebel><?php echo $err_number;?></lebel></td>
				</tr>
				<tr>
					<td><lebel>Address</lebel></td>
					<td>:</td>
					<td><input type="text" name="sa" placeholder="Street Address"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="text" name="city" placeholder = "City" size="6">-<input type="text" name="state" placeholder = "State" size="8"></td>
				</tr>
				<tr>
					<td></td>
					<td><td>
					<input type="text" name="Pocode" placeholder = "Postal/Zip Code">
				</tr>
				
				<tr>
				<td><lebel>Birth Date</lebel></td>
				<td>:</td>
				<td>
				<select name="u_day">
					<option disabled selected>Day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select name="u_month">
					<option disabled selected>Month</option>
					<?php
						$mont= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($mont);$j++)
						{
							echo "<option>$mont[$j]</option>";
						}
					?>
				</select>
				<select name="u_year">
					<option disabled selected>Year</option>
					<?php
						for($k=1971;$k<=2040;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
				</select>
				</td>
				<td><?php echo "$err_day"."  "."$err_month"."  "."$err_year"?></td>
				</tr>
				<tr>
				<td><lebel>Gender</lebel></td>
				<td>:</td>
				<td><input type="radio" name="u_gender" value="Male"><lebel>Male</lebel>
				<input type="radio" name="u_gender" value="Female"><lebel>Female</lebel></td><td><lebel> <?php echo $err_gender;?></lebel></td><br>
				</tr>
				<tr>
				<td><lebel>Where did you hear about us ?</lebel></td>
				<td>:</td>
					<td><input type="checkbox" value="friend" name ="u_source[]">A Colleague<br>
					<input type="checkbox"value="google" name ="u_source[]">Google<br>
					<input type="checkbox"value="blog" name ="u_source[]">Blog Post<br>
					<input type="checkbox"value="news" name ="u_source[]">News Article</td><td><lebel><?php echo $err_source;?></lebel></td></br>
				</tr>			
				<tr>
				<td><lebel>Bio</lebel></td>
				<td>:</td>
				<td><textarea name="u_bio" ></textarea></td>
				<td><lebel><?php echo $err_bio;?></lebel></td>
				</tr>
				<tr>
				<td><br></td>
				</tr>
				<tr>
				<td colspan="2" align="center">
				<input type="Submit" name="submit" value="Register">
				</td>
				</tr>
			</table>
	</fieldset>
		</form>
		</center>
	</body>
</html>