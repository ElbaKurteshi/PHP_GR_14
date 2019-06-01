<html>
<head>
	<title>PHP guessing game</title>
	<style>
	
		body {
			 background: url(guessimage.jpg);
             border-image-width: 100px;
		     text-align:center;
			text-align:center;
			margin-top:300px;
			
		}

	</style>
	</head>
<?php

$rand = rand(1,10);

$guess = $_POST['guess'];
$submit= $_POST['submit'];

if ( isset($submit)){
	
if ($guess<1 || $guess>10) {
	
	echo "<h2>Your guess must be a number between 1 and 10!</h2>";
	
}	else {
	if($guess!=$rand) {
		
		echo "<h2>Incorrect , the correct answer is " . $rand ."   </h2>" ;
		
		
	}
	else {
		echo " <h2>That is correct</h2>";
	}
	
	
	
}
	
}
else {
	header("Location:game.php");
	exit();
}


