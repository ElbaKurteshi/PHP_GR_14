<!DOCTYPE html>

<html>
<head>
<title> Chinese Food </title>
<meta charset="utf-8">
</head>
<link rel="stylesheet" href="chinese.css">
<style type="text/css">

    .sorting {
    font-size:1em;
    font:bold;
    margin-top:25em;
         float:left;
    width: 230px;
    background-color:rgba(255, 194, 102, 0.7);
    border-radius: 10px;  
    }

    .numeric1 {
    font-size:1em;
    font:bold;
    margin-top:5em;
    float:left;
    width: 230px;
    background-color:rgba(255, 194, 102, 0.7);
    border-radius: 10px;    
    }
 .numeric {
    font-size:1em;
    font:bold;
    margin-top:5em;
    float:left;
    width: 230px;
    background-color:rgba(255, 194, 102, 0.7);
    border-radius: 10px;
    }
	


</style>
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
<section>
	
	<hr>
</section> 

<!--ANIMACIONI-->
			<div class="animacion2">
			<img src="images\chinese.png" width=300 height=200> 
			</div>

<!--Artikujt-->
<article>
<div class="chinese">
			        <h3>Noodles in soup</h3>
                    <img src="images\noodles.jpg" width=400 height=200> 
                    <p>
<!--Qasje ne Variabla me GLOBAL arrays-->
<?php
$x = 40;
$y = 20; 

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo 'Noodle soup refers to a variety of soups with noodles and other ingredients served in a light broth. Noodle soup is common dish across East and Southeast Asia. Various types of noodles are used, such as rice noodles, wheat noodles and egg noodles.While we do think of pasta as a culturally Italian food, it is likely the descendent of ancient Asian noodles. A common belief about pasta is that it was brought to Italy from China by Marco Polo during the 13th century.' ;
?>
                    </p>    
                    </div>
					
					
<div class="chinese">
			        <h3>Chinese Pancake</h3>
                    <img src="images\chinese pancake.jpg" width=400 height=200> 
                    <p>
                    
Paper wrapped cake (Chinese: 紙包蛋糕; Jyutping: zi2 baau1 daan6 gou1) is a type of Chinese pastry. It is one of the most common pastries served in Hong Kong. It can also be found in most Chinatown bakery shops. In essence, it is a chiffon cake baked in a paper cup.

In the bakeries of Chinatown, San Francisco, it is commonly referred to as "sponge cake."
 <!--Built-in math function-->
    <?php
    $number = 9.55776232;
    echo
        round($number) . "<br/>"; 
    ?> 
                    portion per hour. 
                    </p>    
                    </div>
					
   
    
