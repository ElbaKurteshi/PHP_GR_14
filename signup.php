<!DOCTYPE html>

<html>
<head>
<title> Sign Up </title>
<meta charset="utf-8">

</head>
<link rel="stylesheet" href="signup.css">

<!--jQuery Events-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script> 
<script src="jquery-3.2.1.min.js"></script> 

<body>
<header>
<nav>
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
            
</nav>
</header>
 <hr>



<div id="signup">

	<form name="signup" action="insert.php" method="POST">
            <h1><u>Sign Up</u></h1>

			<p>First Name</br>
            <input type="text" placeholder="First Name"  name="firstname" required="required">

			<p>Last Name</br>
            <input type="text" placeholder="Last Name"  name="lastname" required="required">

            <p>Username</br>
            <input type="text" placeholder="Username"  name="username" required="required">

			<p>E-mail</br>
            <input type="email" placeholder="E-mail"  name="email" required="required">
			
