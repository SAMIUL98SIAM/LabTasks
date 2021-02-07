<!DOCTYPE html>
<html>
<head>
	<title>Problem 2 - Lab3</title>
</head>
<body>
	<h1>Grade Policy</h1>
	<?php
		$marks = 79 ;
        echo "Your cuurent marks: " . $marks . "<br/><br/>"; 
		if($marks>=90) 
		{
		 	echo "A+";
		}
		elseif(($marks>=80) and ($marks<=90)) 
		{
		 	echo "A";
		}
		elseif(($marks>=70) and ($marks<=80)) 
		{
		 	echo "B";
		}
		elseif(($marks>=60) and ($marks<=70)) 
		{
		 	echo "C";
		}
		else 
		{
			echo "F";
		}

	?>
</body>
</html>