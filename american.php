<!DOCTYPE html>

<html>
<head>
<title> American foods  </title>
<meta charset="utf-8">
<style>
	
	body{
   font-family: Verdana, Arial, sans-serif;
     background: url(tss1.jpg);
     background-attachment: fixed;
    background-repeat: no-repeat;
     background-position:100%;
    }
	div {
  background-color: lightgrey;
  width: 560px;
  border: 15px solid beige;
  padding: 50px;
  margin: 20px;
}
	
	
	</style>
</head>

<body>
<div>
			        <h4>Facts about american eating habits!</h4>
                    <p> Let's see an array about american foods.<br>
					<?php
$str = "American foods are delicious";
print_r (explode(" ",$str));
?> <br>
Now let's take that array and form it in a full sentence.<br>
 <?php
