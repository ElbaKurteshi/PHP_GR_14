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

