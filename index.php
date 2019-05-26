<?php
session_start();
?>

<!DOCTYPE html>

<html manifest="manifest.appcache">
    <head>
        <title>Foods Blog</title>
        <meta charset="utf-8">
		
		<link rel="stylesheet" href="stili.css">
		<style type="text/css">
			 .ushqimet{
	font-size:1em;
	font:bold;
	margin-top: 71em;
    margin-left: -12px;
	float:left;
    width: 280px;
    background-color:rgba(224, 224, 209, 0.7);
    border: 3px solid #f5f5f0;
	border-radius: 8px;	
			}
.twitter{
	font-size:1em;
	font:bold;
	margin-top: 23em;
	float:left;
    width: 280px;
    background-color:rgba(224, 224, 209, 0.7);
    }


.all {
  width: 251px;
  height:75px;
  font-size: 1em;
  font-weight:bold;
  background-color:rgba(255, 0, 0, 0.1);
 
  position:relative;
  margin-top:3em;
  margin-bottom:1.5em;
  padding-top:2em;
  padding-bottom:0.2em;
  text-align: center;
  border:solid 1px #669999;
}
			
			
		</style>
			
			
			</head>
	<body>
			 <header>
            <a href="index.php"></a>
           <nav> 
		   <div id="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="ItalianFood.php">Italian Food</a></li>
                    <li><a href="mexican.php">Mexican Food</a></li>
                    <li><a href="chinese.php">Chinese Food</a></li>
					<li><a href="american.php">American Food</a></li>
				    <li><a href="AlbanianFood.php">Albanian Food</a></li>
					<li><a href="contacts.php">Contacts</a></li>
					<li><a href="login.php">Log In</a></li>
                </ul>
				</div>
           </nav>
        </header>

	
 <article>	
            <section>
            
            <hr>
				
			<!--Konstante ne PHP-->
<?php
define("WELCOME", "<h2>Different Countries Foods</h2>");

function myTest() {
    echo WELCOME;
} 
myTest();
?> 
            </section> 
	
    	
            <div class="text">
			        <h3>Italian Food</h3>
                    <?php
// Set session variables
$_SESSION["pizza"] = "Vegetarian";
$_SESSION["pasta"] = "bolognese";
?>
                    <img src="images\italian.jpg" width=400 height=200  
                    <span>
                    <p>Italian cuisine is generally characterized by its simplicity, with many dishes having only two to four main ingredients. Italian cooks rely chiefly on the quality of the ingredients rather than on elaborate preparation. Ingredients and dishes vary by region. Many dishes that were once regional have proliferated with variations throughout the country.
<?php
// Echo session variables that were set before
echo $_SESSION["pizza"];
?> is the best Pizza.And for pasta is :
<?php
// Echo session variables that were set before
echo $_SESSION["pasta"].".</br></br>";
?>
<!-- leximi i vlerave te ruajtura ne session-->
<?php
print_r($_SESSION);
?>

<!--ndryshimi dhe leximi i vlerave te ruajtura ne session-->
<?php 
$_SESSION["pasta"] = "bolognese";
echo "</br>";
print_r($_SESSION);
?>

<!--Fshirja e sessions-->
<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();
?>

                    </p>    
            </div>
					
			</body>
