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
	<i> <h4>Facts about american eating habits!</h4> </i>
                    <p> Let's see an array about american foods.<br>
					<?php
$american = "American foods are delicious";
print_r (explode(" ",$american));
?> <br> <br>
 <b>Now let's take that array and form it in a full sentence.</b><br>
			    
 <?php
$americanfood = array('American','foods','are','delicious.');
echo implode(" ",$americanfood);
?> <br> <br>
			    
<?php
echo "There's a food named Scrapple aka Pork Mush. But since the name is quite weird and not easily stuck in mind 
you can also refer to it as ";
$remove = "Scrapple aka Pork Mush.";
echo trim($remove,"Scrapple aka Pork!");
?>
<br>
</p>  
  </div>
	
	<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "getHint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
	<p style="color:black;"><b>Start typing a name:</b> </p>
<form style="color:black;"> 
First name: <input type="text" onkeyup="showHint(this.value)">
</form>
    <p style ="color:black;">Suggestions: <span id="txtHint"></span></p>
    
</body>
</html>
