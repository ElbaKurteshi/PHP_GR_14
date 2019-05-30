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

