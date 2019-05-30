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
