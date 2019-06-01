<?php
session_start();
?>
<html>
<head>
    <title> User Login</title>
    <style>
       
     input[type="text"]
    {
       background: #fff;
        width:300px;
        height:39px;
        padding: 0 7px;
        position: relative;
        bottom:10px;
        display:inline-block;
        font-size:20px;
        box-sizing: border-box;
        
    }
         input[type="password"]
    {
       background: #fff;
        width:300px;
        height:39px;
        padding: 0 7px;
		 position: relative;
        bottom:10px;
        display:inline-block;
        font-size:20px;
        box-sizing: border-box;
        
    }
     input[type="submit"]
    {
        position: relative;
        left: -5px;
		margin-top:10px;
        border-radius: 10px 10px 10px 10px;
        padding:8px;
		background-color:rgba(255, 0, 0, 0.4);
        color: white;
        outline: none;
        border: none;
        cursor: pointer;
        bottom:10px;
        display:inline-block;
        font-size:20px;
        box-sizing: border-box;
    }
        div {
            margin-bottom: 200px;
             }
        
    </style>
</head>
<link rel="stylesheet" href="login.css">
    <body align="center">
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
        <div>
    <form  action="loginform.php" method="POST">
        <h1> User login </h1> <br> <br>
       <b> Username: </b> <input type="text" name="username"> <br> <br>
      <b>   Password: </b>  <input type="password" name="password"><br> <br>
        
        <input type="submit"  name="submit" value="LOGIN">
        <b><p> Don't have an account? <a href="signup.php">Sign Up</a> </p></b>

        
    </form>
  </div>
</body>
</html>