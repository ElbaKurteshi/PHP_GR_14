
<html>
<head>
<title> Contacts </title>
<meta charset="utf-8">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("p").hide(1000);
    });
	
	$("#show").click(function(){
    $("p").show(1000);
});
});
</script>
	
	</head>
<link rel="stylesheet" href="contacts.css">
	
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
		
		<b><p>If you want to read more click here: <a href="#aboutus">About Us</a></p></b>


		
	<hr>
<script type="text/javascript">

function multipleparameters (first, second) {
   document.write("Here are our "+ first + " if you want to contact " + second + ".");
}

multipleparameters("E-mails", "us");

</script>
		<table style="width:50%; height: 10%">

  <tr>
    <th> Name of admins </th>
    <th> E-mail </th>
  </tr>

 <tr>
    <td> Blinera Bytyqi </td>
    <td><address> <a href="mailto:blinerab@live.com">blinerab@live.com </a></address> </td>
  </tr>
<tr>
    <td> Elba Kurteshi </td>
	<td><address> <a href="elbakurteshi99@gmail.com">elbakurteshi99@gmail.com</a></address> </td>
  </tr>
<tr>
    <td> Fitore Halimi</td>
	<td><address> <a href="mailto: fitorehalimi2@gmail.com">fitorehalimi2@gmail.com </a></address> </td> 
  </tr>
	<tr>
    <td>Valmira Lokaj </td>
    <td><address> <a href="mailto:valmira.lokaj@studentet.uni-pr.edu"> valmira.lokaj@studentet.uni-pr.edu</a></address> </td>
  </tr>
  
</table>	
		
	<hr>
		<figure>
<div class="map">
<img src="images\map.png" title="map" alt="map photo" width=300 height=300>
<figcaption>
<pre><strong> Note:</strong>This is our location.</pre>
</figcaption>
<figure>

		<div class="info">
<hr>
<h3 id="aboutus">About Us</h3>

<!--Associative Arrays-->
<p> 
  <?php
$members = array("FIEK"=>"4", "FIM"=>"7", "FNA"=>"10");
echo "We are " .$members['FIEK'] . " students of computer engineering and we worked together on building this website. All the food lovers are welcomed in our website . We worked a lot in this project , and we tried our best' .";
?>
</p>
	<mark> Thank You </mark>
<br/>
<button id="hide">Hide</button>
			
	<button id="show">Show</button>
</div>
</nav>
</body>
</html>		
			
		
			
