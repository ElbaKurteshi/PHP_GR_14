<?php
session_start();
if(isset($_SESSION['log']))
{

?>


<html>
<head>
	<title>PHP guessing game</title>
	<style>
	
		body {
			 background: url(guessimage.jpg);
             border-image-width: 100px;
		
		}
		
		.game1{
			
			text-align:center;
			margin-top:300px;
			border:2px;
			
			
		}
	

   
    input[type="number"]
    {
       background: #fff;
        width:300px;
        height:39px;
        padding: 0 7px;
		 position: relative;
        bottom:10px;
        display:inline-block;
        font-size:20px;
        box-sizing: border-box;
        
    }
    input[type="submit"]
    {
        position: relative;
        left: -5px;
		margin-top:10px;
        border-radius: 10px 10px 10px 10px;
        padding:8px;
        
		background-color:rgba(255, 0, 0, 0.4);
        color: white;
        outline: none;
        border: none;
        cursor: pointer;
        bottom:10px;
        display:inline-block;
        font-size:20px;
        box-sizing: border-box;
    }
	
	</style>
	
	
	</head>

	
<body>
	
	<div class="game1">
	<form action="gen.php" method="POST">
	<h3>Your guess must be a number,choose it below:</h3> <input type="number" name="guess"><br/>
		<input type="submit" name="submit" value="Guess">
		<b><p> Do you want to log out? <a href="login.php">Log Out</a> </p></b>
		
	
	</form>
	</div>
	</body>

</html>
<?php
}
else 
{
    echo "please fill proper details";
    header("url=login.php");
}
