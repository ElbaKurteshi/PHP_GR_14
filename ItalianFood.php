<!DOCTYPE html>
<!--Create a cookie-->
<?php
$cookie_name = "Italian";
$cookie_value = "Pizza";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<head>
<title> ItalianFood </title>
<meta charset="utf-8">
</head>
<link rel="stylesheet" href="Italian.css">

<!--jQuery Callback-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("code").hide("slow", function(){
            alert("The information is now hidden");
        });
    });
});
</script>
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
            <div class="Italian">
       
<!--Here we check if we have a cookie named italian-->
<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "<h3>"."This '".$cookie_name . "' is not defined!"."</h3>";
} else {
     echo "<h3>".$_COOKIE[$cookie_name]."</h3>";
}
?>

<!--Delete the cookie italian-->
<?php
// set the expiration date to one hour ago
setcookie("Pizza", "", time() - 3600);
?>
                <img src="images\pizza.jpg" width=400 height=200> 
                    <p><cite>Pizza</cite>  is a savory dish of Italian origin, consisting of a usually round, flattened base of leavened wheat-based dough topped with tomatoes, cheese, and various other ingredients (anchovies, olives, meat, etc.) baked at a high temperature, traditionally in a wood-fired oven. In formal settings, like a restaurant, pizza is eaten with knife and fork, but in casual settings it is cut into wedges to be eaten while held in the hand. Small pizzas are sometimes called pizzettas.
                    The term pizza was first recorded in the 10th century in a Latin manuscript from the Southern Italian town of Gaeta in Lazio, on the border with Campania.Modern pizza was invented in Naples, and the dish and its variants have since become popular in many countries. It has become one of the most popular foods in the world and a common fast food item in Europe and North America, available at pizzerias (restaurants specializing in pizza), restaurants offering Mediterranean cuisine, and via pizza delivery.
<!--Here we check if the cookie named italian is deleted-->
                        <?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "This wasn't all about this ".$cookie_name;
} else {
     echo "This was all about this ".$cookie_name." named ".$_COOKIE[$cookie_name].".";
}
?>
      </p>    
            </div>
             <div class="Italian">
                    <h3>Macaroni</h3>

                    <img src="images\macaroni.jpg" width=400 height=200> 
                    <p><cite>Macaroni</cite>  is dry pasta shaped like narrow tubes. Made with durum wheat, macaroni is commonly cut in short lengths; curved macaroni may be referred to as elbow macaroni. Some home machines can make macaroni shapes, but like most pasta, macaroni is usually made commercially by large-scale extrusion. The curved shape is created by different speeds of extrusion on opposite sides of the pasta tube as it comes out of the machine.
                    In North America, the word "macaroni" is often used synonymously with elbow-shaped macaroni, as it is the variety most often used in macaroni and cheese recipes. In Italy, the noun maccheroni refers to straight, tubular, square-ended pasta corta ("short-length pasta"). Maccheroni may also refer to long pasta dishes such as maccheroni alla chitarra and frittata di maccheroni, which are prepared with long pasta like spaghetti.
<!--Here we check if the cookie named italian is deleted-->

                    
                    </p>    
            </div>
            <div class="Italian">
                   <h3>Spaghetti</h3>
                    <img src="images\spaghetti.jpg" width=400 height=200> 
                    <p> <cite>Spaghetti </cite> is a long, thin, solid, cylindrical pasta.Spaghettoni is a thicker form of spaghetti, while capellini is a very thin spaghetti. It is a staple food of traditional Italian cuisine. Like other pasta, spaghetti is made of milled wheat and water and sometimes enriched with vitamins and minerals. Authentic Italian spaghetti is made from durum wheat semolina, but elsewhere it may be made with other kinds of flour. Typically the pasta is white because refined flour is used, but whole wheat flour may be added.
                    Originally, spaghetti was notably long, but shorter lengths gained in popularity during the latter half of the 20th century and now it is most commonly available in 25–30 cm (10–12 in) lengths. A variety of pasta dishes are based on it, and it is frequently served with tomato sauce or meat or vegetables.

           </p>             
                    </div>
            
            <div class="Italian">
<!--Check if there are any cookies enabled in this page-->
<?php
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled in this page.";
} else {
    echo "Cookies are disabled in this page.";
}
?>
</div>
          
</article>
</body>
</html>


