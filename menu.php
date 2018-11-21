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

<!doctype html>
<html lang="en">
<head>
  <title>JavaJam Coffee House</title>
  <meta charset=“utf-8”>
  <link rel = "stylesheet" href = "styles.css">
  <script type = "text/javascript"  src = "menuvalidation.js"></script>
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
	<h1>Coffee at JavaJam</h1>
	
  <form action="submitform.php" method="post">
  <table border = "0">
  <tr>
  <td></td><td></td><td align = center>Quantity</td><td>Subtotal</td>
  </tr>
  <tr>
    <td align = "center">Just Java</td>
	<td>Regular house blend, decaffeinated coffee, or flavor of <br>the day.<br>Endless Cup $<?php echo number_format($priceJava,2);?></td>
	<td align = "center"><input class="quan"  type = "text"  size = "3" name = "qtyJava" id = "qtyJava"  maxlength = "2"></td>
	<td align = "center"><input class="quan"  type = "text"  size = "3" name = "subJava" id = "subJava"></td>
  </tr>
  <tr>
    <td align = "center">Cafe au Lait</td>
	<td>House blended coffee infused into a smooth, steamed <br>milk. <br>Single $<?php echo number_format($priceCafe1,2);?> Double $<?php echo number_format($priceCafe2,2);?></td>
 	<td align = "center">Single<input class="quan"  type = "text"  size = "3" name = "qtyCafe1" id = "qtyCafe1"  maxlength = "2"><br>Double<input class="quan"  type = "text"  size = "3" name = "qtyCafe2" id = "qtyCafe2" maxlength = "2"></td>
	<td align = "center"><input class="quan"  type = "text"  size = "3" name = "subCafe" id = "subCafe"></td>
  </tr>
  <tr>
    <td align = "center">Iced<br>Cappuchino</td>
	<td>Sweetened espresso blended with icy-cold milk and <br>served in a chilled glass. <br>Single $<?php echo number_format($priceCap1,2);?> Double $<?php echo number_format($priceCap2,2);?></td>
	<td align = "center">Single<input class="quan"  type = "text"  size = "3" name = "qtyCap1" id = "qtyCap1"  maxlength = "2"><br>Double<input class="quan"  type = "text"  size = "3" name = "qtyCap2" id = "qtyCap2" maxlength = "2"></td>
	<td align = "center"><input class="quan"  type = "text"  size = "3" name = "subCap" id = "subCap"></td>
  </tr>
  <tr>
  <td></td><td></td><td align = center>Total($)</td><td align = "center"><input class="quan"  type = "text"  size = "3" name = "total" id = "total"></td>
  </tr>
  </table>
  <input type="submit" name="submit" value="Place Order">
  </form>
  <script type = "text/javascript"  src = "menuhandler.js"></script>
  </div>
  <footer>
    <small><i>Copyright &copy 2014 JavaJam Coffee House<br><a href = "mailto:yiinlih@ong.com">yiinlih@ong.com</a>
	</i></small>
  </footer>
</div>

</body>
</html>