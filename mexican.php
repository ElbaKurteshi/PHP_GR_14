<!DOCTYPE html>
<html>
<head>	
<title> Mexican </title>
<meta charset="utf-8">
</head>
	
<link rel="stylesheet" href="mexican.css">
	
<body>
<header>
<nav>
	
<div id='active'>
            <ul>
	    <li ><a href='index.php'><span>Home</span></a></li>
            <li ><a href="ItalianFood.php"><span>Italian Food</span></a></li>
            <li ><a href="mexican.php"><span>Mexican Food</span></a></li>
            <li ><a href="chinese.php"><span>Chinese Food</span></a></li>
            <li ><a href="american.php"><span>American Food</span></a></li>
	    <li ><a href="AlbanianFood.php"><span>Albanian Food</span></a></li>
	    <li ><a href="contacts.php"><span>Contacts</span></a></li>
	    <li ><a href="login.php"><span>Log In</span></a></li>
            </ul>
</div>
	
</nav>
</header>
	
<hr>

<article>
	
<div class="Insects">
	
<h3>Chilaquiles</h3>
<img src="images\chilaquiles.jpg" width=400 height=200> 
<p> This popular traditional breakfast dish features lightly fried corn tortillas cut into quarters and topped with green or red salsa (the red is slightly spicier). Scrambled or fried eggs and pulled chicken are usually added on top, as well as cheese and cream. Chilaquiles are often served with a healthy dose of frijoles (refried beans).
Typically, corn tortillas cut in quarters and lightly fried are the basis of the dish.Green or red salsa or mole is poured over the crisp tortilla triangles. The mixture is simmered until the tortilla starts softening. Pulled chicken is sometimes added to the mix. It is commonly garnished with crema, crumbled queso fresco, raw onion rings and avocado slices. Chilaquiles can be served with refried beans, eggs (scrambled or fried), beef and guacamole as side dish.
As with many Mexican dishes, regional and family variations are quite common. Usually, chilaquiles are eaten at breakfast or brunch. This makes them a popular recipe to use leftover tortillas and salsas.

<?php
$string = 'Chilaquiles are tasty and delicious to try.';
$patterns = array();
$patterns[0] = '/are/';
$patterns[1] = '/tasty/';
$patterns[2] = '/delicious/';
$replacements = array();
$replacements[2] = 'are not';
$replacements[1] = 'slanderous';
$replacements[0] = 'terrible';
echo preg_replace($patterns, $replacements, $string);
?>
</p>    
</div>
		
<div class="Insects">			
<h3>Enchiladas</h3>
<img src="images\enchiladas.jpg" width=400 height=200> 
<p> Enchiladas date back to Mayan times, when people in the Valley of Mexico would eat corn tortillas wrapped around small fish. These days both corn and flour tortillas are used and are filled with meat, cheese, seafood, beans, vegetables or all of the above. The stuffed tortillas are then covered in a chilli sauce, making for a perfect Mexican breakfast.An enchilada is a corn tortilla rolled around a filling and covered with a chili pepper sauce. Enchiladas can be filled with a variety of ingredients, including various meats, cheese, beans, potatoes, vegetables or combinations. Originating in Mexico, enchiladas are a popular dish throughout Mexico and the American Southwest.Enchiladas originated in Mexico, where the practice of rolling tortillas around other food dates back at least to Mayan times.The people living in the lake region of the Valley of Mexico traditionally ate corn tortillas folded or rolled around small fish.

<?php
//sa shpejt mundet nje pjate mu gatu ose pergatit
$dish1 = new Dish(10);
unset($dish1);

class Dish {
    public $speed = 120;
    
    function __construct ($speed) {
        $this -> speed = $speed;
    }
    
    function __destruct() { //__destruct thirret automatikisht kur ne fshijme nje objekt te caktuar
        print ("They're capable of cooking 5 dishes per hour!"); //fshihet objekti dhe printohet ky mesazh
    }
}
?>
</p>    
</div>
	
<div class="Insects">
<h3>Guacamole</h3>
<img src="images\guacamole.jpg" width=400 height=200> 
<p>Guacamole is undoubtedly one of Mexico’s most popular dishes, but few people know that this traditional sauce dates back to the time of the Aztecs. Made from mashed-up avocadoes, onions, tomatoes, lemon juice and chilli peppers (and sometimes a clove or two of garlic), guacamole is often eaten with tortilla chips or used as a side dish.Guacamole dip is traditionally made by mashing ripe avocados and sea salt with a molcajete y tejolote (mortar and pestle).Recipes call for lime juice, cilantro (UK English: coriander), jalapeño, onion, and salt. Some non-traditional recipes call for sour cream, tomatoes, basil, or even peas.Guacamole has increased avocado sales in the U.S., especially on Super Bowl Sunday and Cinco de Mayo.The rising consumption of guacamole is most likely due to the U.S. government lifting a ban on avocado imports in the 1990s and the growth of the U.S. Latino population.
</p>    
</div>
	
</article>

				
</body>
</html>
