<!DOCTYPE html>
<html>
<head>
	<title>Problem 3 - Demo</title>
</head>
<body>
	<?php
		$a = 3;
		$b = 4;
		$Area = $a * $b ;
		echo "Area = " . $Area . "<br/><br/>";
		$Perimeter = 2*($a + $b);
		echo "Perimeter = " . $Perimeter . "<br/><br/>";
		if ($a==$b) 
		{
			echo "The shape is square!";
		}
		else{
		      echo "The shape is not square!";	
		}
	?>
</body>
</html>