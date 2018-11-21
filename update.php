<?php
  $javaNew=$_POST['JavaNew'];
  $cafe1New=$_POST['Cafe1New'];
  $cafe2New=$_POST['Cafe2New'];
  $cap1New=$_POST['Cap1New'];
  $cap2New=$_POST['Cap2New'];

  @$db = new mysqli('localhost', 'f34ee', 'f34ee', 'f34ee');
	if (mysqli_connect_errno()) {
		echo 'Error: Could not connect to database.  Please try again later.';
		exit;
	}  
	
	if ($javaNew != NULL) {
			if (!get_magic_quotes_gpc()){
			$javaNew = addslashes($javaNew);
			}	
		$query = "UPDATE JavaJam SET price = '".$javaNew."' WHERE name='Java'";
		$result = $db->query($query);		
	}
	
	if ($cafe1New != NULL) {
			if (!get_magic_quotes_gpc()){
			$cafe1New = addslashes($cafe1New);
			}	
		$query = "UPDATE JavaJam SET price = '".$cafe1New."' WHERE name='Cafe1'";
		$result = $db->query($query);		
	}  
	
	if ($cafe2New != NULL) {
			if (!get_magic_quotes_gpc()){
			$cafe2New = addslashes($cafe2New);
			}	
		$query = "UPDATE JavaJam SET price = '".$cafe2New."' WHERE name='Cafe2'";
		$result = $db->query($query);		
	}

	if ($cap1New != NULL) {
			if (!get_magic_quotes_gpc()){
			$cap1New = addslashes($cap1New);
			}	
		$query = "UPDATE JavaJam SET price = '".$cap1New."' WHERE name='Cap1'";
		$result = $db->query($query);		
	}

	if ($cap2New != NULL) {
			if (!get_magic_quotes_gpc()){
			$cap2New = addslashes($cap2New);
			}	
		$query = "UPDATE JavaJam SET price = '".$cap2New."' WHERE name='Cap2'";
		$result = $db->query($query);		
	}	
  
?>

<!doctype html>
<html lang="en">
<head>
  <title>JavaJam Coffee House</title>
  <meta charset=“utf-8”>
  <link rel = "stylesheet" href = "styles.css">
</head>
<body>  
<div id="wrapper">
  <header>
  </header>
  <div id="leftcolumn">
    <nav>
	 <ul>
      <li><a href="index.html">Home</a></li>
	  <li><a href="menu.php">Menu</a></li>
      <li><a href="music.html">Music</a></li>
      <li><a href="jobs.html">Jobs</a></li>
      <li><a href="update.php">Update</a></li>
      <li><a href="report.php">Report</a></li>	  
	 </ul>
    </nav>
  </div>
  <div id = "centercolumn" class="quantity">
  <?php
  $javaNew=$_POST['JavaNew'];

  @$db = new mysqli('localhost', 'f34ee', 'f34ee', 'f34ee');
	if (mysqli_connect_errno()) {
		echo 'Error: Could not connect to database.  Please try again later.';
		exit;
	}  
  	$query = "SELECT * FROM JavaJam WHERE name = 'Java'";	
	$result = $db->query($query);
    $row = $result->fetch_assoc();
	$priceJava = stripslashes($row['price']);
  	$query = "SELECT * FROM JavaJam WHERE name = 'Cap1'";	
	$result = $db->query($query);
    $row = $result->fetch_assoc();
	$priceCap1 = stripslashes($row['price']);
  	$query = "SELECT * FROM JavaJam WHERE name = 'Cap2'";	
	$result = $db->query($query);
    $row = $result->fetch_assoc();
	$priceCap2 = stripslashes($row['price']);
  	$query = "SELECT * FROM JavaJam WHERE name = 'Cafe1'";	
	$result = $db->query($query);
    $row = $result->fetch_assoc();
	$priceCafe1 = stripslashes($row['price']);
  	$query = "SELECT * FROM JavaJam WHERE name = 'Cafe2'";	
	$result = $db->query($query);
    $row = $result->fetch_assoc();
	$priceCafe2 = stripslashes($row['price']);
	//echo $priceCap2;
  
	?>
	<h1>Coffee at JavaJam</h1>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id = "my_form">
  <table border = "0">
  <tr>
  <th colspan=2 align = left>Click to update product prices:</th>
  <th>Pricing</th>
  </tr>
  <tr>
    <td align = "center">Just Java<br><button type="button" onclick="inputJava()">Java</button></td>
	<td>Regular house blend, decaffeinated coffee, or flavor of <br>the day.<br>Endless Cup $<?php echo number_format($priceJava,2);?></td>
	<td align = "center"><input class="quan" name="JavaNew" type = "number" step=".01"  size = "3"  id = "priceJava"></td>
  </tr>
  <tr>
    <td align = "center">Cafe au Lait<br><button type="button" onclick="inputCafe1()">Single</button><button type="button" onclick="inputCafe2()">Double</button></td>
	<td>House blended coffee infused into a smooth, steamed milk. <br>Single $<?php echo number_format($priceCafe1,2);?> Double $<?php echo number_format($priceCafe2,2);?></td>
	<td align = "center">Single<input class="quan" name="Cafe1New" type = "number" step=".01"  size = "3"  id = "priceCafe1">Double<input class="quan" name="Cafe2New" type = "number" step=".01"  size = "3"  id = "priceCafe2"></td>
  </tr>
  <tr>
    <td align = "center">Iced<br>Cappuchino<br><button type="button" onclick="inputCap1()">Input</button><button type="button" onclick="inputCap2()">Double</button></td>
	<td>Sweetened espresso blended with icy-cold milk and served in a chilled glass. <br>Single $<?php echo number_format($priceCap1,2);?> Double $<?php echo number_format($priceCap2,2);?></td>
	<td align = "center">Single<input class="quan" name="Cap1New" type = "number" step=".01"  size = "3"  id = "priceCap1">Double<input class="quan" name="Cap2New" type = "number" step=".01"  size = "3"  id = "priceCap2"></td>
  </tr>
  </table>
  <input type="submit" id="textSubmit" form="my_form" value="Apply Now"> 
  </form>
  <script>
  function inputJava(){
	var newPrice;
	var popup = prompt("Enter new price:", "0");
    if (popup == null || popup == "") {
        newPrice = "0";
    } else {
        newPrice = popup;
    }
	document.getElementById("priceJava").value = newPrice;
  }
  
  function inputCafe1(){
	var newPrice;
	var popup = prompt("Enter new price:", "0");
    if (popup == null || popup == "") {
        newPrice = "0";
    } else {
        newPrice = popup;
    }
	document.getElementById("priceCafe1").value = newPrice;
  }
  
  function inputCafe2(){
	var newPrice;
	var popup = prompt("Enter new price:", "0");
    if (popup == null || popup == "") {
        newPrice = "0";
    } else {
        newPrice = popup;
    }
	document.getElementById("priceCafe2").value = newPrice;
  }  
  
  function inputCap1(){
	var newPrice;
	var popup = prompt("Enter new price:", "0");
    if (popup == null || popup == "") {
        newPrice = "0";
    } else {
        newPrice = popup;
    }
	document.getElementById("priceCap1").value = newPrice;
  }  
  
    function inputCap2(){
	var newPrice;
	var popup = prompt("Enter new price:", "0");
    if (popup == null || popup == "") {
        newPrice = "0";
    } else {
        newPrice = popup;
    }
	document.getElementById("priceCap2").value = newPrice;
  }  
  
  </script>
  </div>
  <footer>
    <small><i>Copyright &copy 2014 JavaJam Coffee House<br><a href = "mailto:yiinlih@ong.com">yiinlih@ong.com</a>
	</i></small>
  </footer>
</div>

</body>
</html>