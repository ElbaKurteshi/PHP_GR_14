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
			    $arr = array('American','foods','are','delicious.');
echo implode(" ",$arr);
?> <br>
<?php
echo "There's a food named Scrapple aka Pork Mush. But since the name is quite weird and not easily stuck in mind 
you can also refer to it as ";
$str = "Scrapple aka Pork Mush.";
echo trim($str,"Scrapple aka Pork!");
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
</body>
</html>
