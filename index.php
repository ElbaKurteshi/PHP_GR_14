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
	 
	 <div class="text">
			    <h3>Mexican Food</h3>
                <img src="images\mexican.jpg" width=400 height=200
               
                <p>
                Mexican cuisine is an important aspect of the culture, social structure and popular traditions of Mexico. The most important example of this connection is the use of mole for special occasions and holidays, particularly in the South and Central regions of the country. Traditional Mexican cuisine was inscribed in 2010.</p> 	
            </div>
  
		
            <div class="text">
			    <h3>Chinese Food</h3>
                <img src="images\chinese.jpg" width=400 height=200
                
                <p>
               Chinese cuisine is an important part of Chinese culture, which includes cuisine originating from the diverse regions of China, as well as from Chinese people in other parts of the world. Chinese food staples such as rice, soy sauce, noodles, tea, and tofu, and utensils such as chopsticks and the wok, can now be found worldwide.
               </p>      
            </div>
            
	<div class="text">
			    <h3>American Food</h3>
                <img src="images\american.png" width=400 height=200>
               
                <p>American cuisine reflects the history of the United States, blending the culinary contributions of various groups of people from around the world, including indigenous American Indians, African Americans, Asians, Europeans, Pacific Islanders, and South Americans.When the colonists came to the colonies, they farmed animals for clothing and meat in a similar fashion to what they had done in Europe.
             </p>
                
            </div>
            
            <div class="text">
			    <h3>Albanian Food</h3>
                <img src="images\albanian.jpg" width=400 height=200>
                
                <p>
                The cockroach, also known as the roach, is found worldwide in every environment and every habitat with the 
				exception of water. The cockroach is one of the most commonly known pests to humans of the insects world but
				plays a vital role in the ecosystem ingesting decomposing materials.There are thought to be around 4,000 known
				species of cockroach in existence but only about 30 of the different species of cockroach are the ones that 
				humans come into contact with.</p>      
            </div>
		</article>	
			 <div id="other">
                <section>
				
                <h2>Other interesting foods of different countries</h2>
<!--Perdorimi i preg_split-->				
<?php
    $sentence="<h3>Click on the photo to watch a documentary about those foods </h3> ";
    $result=preg_split ('/  /',$sentence);
    foreach ($result as $content)
    {echo $content."<br>" ;
        
    }
?>                </section>
                <table cellpadding="5">
                    <tr>
                        <td><a href="https://www.youtube.com/watch?v=F5-nfxQjfZU" target="_blank"><img src="images\padthai.jpg" width=140 height=200  ></a></td>
                        <td><a href="https://www.youtube.com/watch?v=Q1-GiGhDf28" target="_blank"><img src="images\curry.jpg" width=140 height=200  ></a></td> 
                        <td><a href="https://www.youtube.com/watch?v=IUX0FH8mERQ" target="_blank"><img src="images\spicy.jpg" width=140 height=200 ></a></td>
                        <td><a href="https://www.youtube.com/watch?v=dHEuOPjdjJg" target="_blank"><img src="images\noodels.jpg" width=140 height=200 ></a></td> 
                    </tr>
                    <tr>
                        <th><font size="5" color="white">Pad Thai | </font></th>
                        <th><font size="5" color="white">Penang Curry | </font></th>
                        <th><font size="5" color="white">Spicy Curry |</font></th>
                        <th><font size="5" color="white">Noodles</font></th>
                    </tr>
                </table>

					
			</body>
