<!--Create a session-->
<?php
session_start();
?>

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
                    <img src="images\italian.jpg" width=400 height=200  >
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
                The cuisine of the central region is threefold of rural, mountainous and coastal. The central region is the flattest and rich in vegetation and biodiversity as well as culinary specialties. It has Mediterranean characteristics due to its proximity to the sea, which is rich in fish. Dishes here include several meat specialties and desserts of all kinds.

In the south, the cuisine is composed of two components: the rural products of the field including dairy products, citrus fruits and olive oil, and coastal products, i.e. seafood. Those regions are particularly conducive to raising animals, as pastures and feed resources are abundant.

Besides garlic, onions are arguably the country's most widely used ingredient. Albania is ranked second in the world in terms of onion consumption per capita</p>      
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

                <!--Perdorimi i funksionit per lexim nga fajllat-->
<?php
$myfile = fopen("FoodThing.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("FoodThing.txt"));
fclose($myfile);
?>




            </div>
        
<aside>
		
<!--Ora-->
		<div class="all">
       
        <?php
        echo "*Today is " . date("Y/m/d") . "<br>";
        echo "*Today is " . date("l");
        ?>
		</div>
		





<div id="pics">
<video src="simpson.mp4" autoplay width="255" height="255" />

</div>		
		
		
            <h2>POLLS</h2> 
			
            <div id="Sondazhi">           
            <div class="poll">
                <h4>For which of the foods listed in our website are you more interested in?</h4>
                <form>
                <input type="checkbox" name="q1" value="checked">Italian<br/>
                <input type="checkbox" name="q1" value="checked" checked>Mexican<br/>
                <input type="checkbox" name="q1" value="checked">Chinese<br/>
                <input type="checkbox" name="q1" value="checked">American<br/>
				<input type="checkbox" name="q1" value="checked">Albanian<br/>
                <br/>
                <button onclick="window.alert('Your vote has been sent')">Vote</button>
                </form>
            </div>
            <div class="poll">
                <h4>Which from the listed food is your favorite one?</h4>
                <form>
                <input type="radio" name="q2" value="1">Pizza<br/>
                <input type="radio" name="q2" value="2" checked>Rice<br/>
                <input type="radio" name="q2" value="3">Pasta<br/>
                <input type="radio" name="q2" value="4">Burger<br/>
				<input type="radio" name="q2" value="5">Flija<br/>
                <br/>
                <button onclick="window.alert('Your vote has been sent')">Vote</button>
                </form>
            </div>      
            <div class="poll">
                <h4>Which of the foods listed above is your least favourite?</h4>
                <form>
               <input type="radio" name="q3" value="1">Pizza<br/>
                <input type="radio" name="3" value="2" checked>Rice<br/>
                <input type="radio" name="q3" value="3">Pasta<br/>
                <input type="radio" name="q3" value="4">Burger<br/>
				<input type="radio" name="q3" value="5">Flija<br/>
                <br/>
                <button onclick="window.alert('Your vote has been sent')">Vote</button>
                </form>
            </div>           
            </div>
<br><br>
<!--Switch dhe Multidimensional Arrays-->
<div class="ushqimet">
    <?php
$ushqime = array
  (
  array("<b>Pizza:</b>",2,3),
  array("<b>Pasta:</b>",3,7),
  array("<b>Burgers:</b>",2,4),
  array("<b>Flija:</b>",1,2)
  );
  
echo $ushqime[0][0]."<br>Ready to be served: ".$ushqime[0][1].", cooking: ".$ushqime[0][2].".<br>";
echo $ushqime[1][0]."<br>Ready to be served: ".$ushqime[1][1].", cooking: ".$ushqime[1][2].".<br>";
echo $ushqime[2][0]."<br>Ready to be served: ".$ushqime[2][1].", cooking: ".$ushqime[2][2].".<br>";
echo $ushqime[3][0]."<br>Ready to be served: ".$ushqime[3][1].", cooking: ".$ushqime[3][2].".<br>";
?>
<br>

<?php
$order = 10000;
while ($order <= 1000)
  {
 echo "The number of  orders on this page is already " . $order . ". You can order now!. <br>";
 $order = $order + 1;
  }

echo "<h6>The number of  orders on this page is already " . $order . ". You can order more NOW!</h6>";
?>

<br>
</div>
				
				
				
			<div id="listat">

                <ul>
                    <h4><li>5 World Famous Foods</li></h4>
                    <ol>
                        <li>Pizza</li>
                        <li>Burger</li>
                        <li>Rice</li>
                        <li>Tacos</li>
                        <li>Pasta</li>
                    </ol>
                    
                    <h4><li>5 Foods To Avoid</li></h4>
                        <ol>
                            <li>French Fries</li>
                            <li>White Bread</li>
                            <li>Oily Foods</li>
                            <li>Eggs</li>
                            <li>Meat</li>
                        </ol>
                   
                    <h4><li>5 Foods Induce Memory Loss</li></h4>
                        <ol>
                            <li>Pasta</li>
                            <li>Cakes</li>
                            <li>White Sugar</li>
                            <li>White Rice</li>
                            <li>Cakes</li>
                        </ol>
                    
                </ul>
                </div>
				

					
<!--Follow Us-->			
        <div id="followus">
            <section>
            <h3><em>Follow us:</em></h3>
            <ul>
                <li><a href="https://www.facebook.com/" target="_blank"><img src="images\Facebook.png" alt="Facebook"></a></li>
                <li><a href="https://www.twitter.com/" target="_blank"><img src="images\Twitter.png" alt="Twitter"></a></li>
                <li><a href="https://plus.google.com/" target="_blank"><img src="images\Google+.png" alt="Google Plus"></a></li>
                <li><a href="https://www.yahoo.com/" target="_blank"><img src="images\Yahoo.png" alt="Yahoo"></a></li>
						
            </ul>
            </section>
        </div>

<!--Web API me twitter-->
<div class="twitter">
<div class="twitterapi">
<?php
$variable = "seeing";

switch ($variable) {
    case "seeing":
        echo "<i>● • Click <a href='twitter.php' target='_blank'>here</a> to see our posts on twitter! • ● </i>";
        break;
    case "notseeing":
        echo "Don't click the link to see our posts on twitter!";
        break;
    default:
        echo "This is our magazine on twitter!";
}
?>
</div>
</div>

</aside>
	
    </body>


</html>
