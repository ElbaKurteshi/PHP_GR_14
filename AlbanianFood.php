<!DOCTYPE html>

<html>
<head>
<title>AlbanianFood</title>
<meta charset="utf-8">
</head>
<link rel="stylesheet" href="Albanian.css">
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
<div class="Albanian">
			       <h3>Flija</h3>
                    <img src="images\flija.png" width=400 height=200> 
                    <p><cite>Flija</cite> also known as fli or flija, is a dish in Albanian cuisine and in Balkan cuisine generally. It consists of multiple crepe-like layers brushed with cream and served with sour cream. The name translates to "sacrifice".
                    March 18 is recognized as "Flia Day" in which families invite their relatives for preparing and eating Flia.[citation needed]
					Flija requires very simple ingredients: flour, water, butter, yogurt and salt. The main ingredients (flour, water and salt) are mixed together until they become like pancake batter. Layers of batter are baked using a sač which is a spherical metal lid used for baking.
                    </p> 
	</div>
					
					
<div class="Albanian">
			       <h3>Byrek</h3>
                   <img src="images\pite.jpg" width=400 height=200> 
                  <p>
                   Savoury dinner pies are a favourite in Albania.  And they are just as hearty as their stews and just as flavourful.  Try byrek, made with feta cheese cabbage, spinach, tomatoes, and meat all layered in a tasty filo pastry. Kungullur is filo pastry and pumpkin, butter, salt, or sugar.  And finally Kakllaasarem – a traditional food from Kosovo, it’s a layered pita without anything inside and covered with garlic and yogurt, served warm. It’s a typical lunch for the Albanians.
<?php
    $years_number = 55 ;
    
    try{
        
        if( !is_numeric($years_number) ){
           throw new InvalidArgumentException('The variable must be a number!'); 
        }
        
        if( ($years_number < 1) || ($years_number > 100) ){
           throw new OutOfRangeException('The variable must be a valid day of month: can e from 1 to 100.'); 
        }
        
        echo 'Byrek has been around for '. $years_number;
        
    }catch( Exception $e ){
        die( $e->getMessage() );
    }
?>
			   years. 


                    </p>    
</div>
	<div class="Albanian">
			        <h3>Tavë Kosi</h3>
                    <img src="images\tavkosi.jpg" width=400 height=200> 
                    <p> The national dish is baked lamb, rice, and yoghurt sauce called tavë kosi.  Everybody’s mother makes it best! Other specialities include pace, which is made by boiling an animal head (usually pig, cow, or sheep) until the meat comes off.  It’s then made into a stew with onion, garlic, and other spices. You might also try harapash, a polenta based dish cooked with lamb intestines, butter, cheese, and corn flour.Dinner appetizers or platters are usually served with salami, prosciutto, feta cheese, green olives, and roasted red peppers. To follow, try koran, a species of trout unique to Albania, jufka, handmade pasta, qofte ferguara, fried lamb or beef meatballs served with feta cheese and bread, or flifa, a humongous pancake, more like a pie, made by layering crepe and served with melted cream cheese.

	
			<!--Exception-->
<?php
//create function with an exception
function checkNum($number) {
  if($number>50) {
    throw new Exception(" Tavë Kosi has been known for 90 years in Albanian cuisine.");
  }
  return true;
}

//trigger exception in a "try" block
try {
  checkNum(90);
  //If the exception is thrown, this text will not be shown
  echo 'If you see this, the number is 50 or below.';
}

//catch exception
catch(Exception $e) {
  echo 'According to the historians ' .$e->getMessage();
}
?>		
	           </p>    
					</div>
					

</article>					
</body>
</html>		  
