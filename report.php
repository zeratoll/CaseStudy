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
	$qtyJava = stripslashes($row['quantity']);
  	$query = "SELECT * FROM JavaJam WHERE name = 'Cap1'";	
	$result = $db->query($query);
    $row = $result->fetch_assoc();
	$priceCap1 = stripslashes($row['price']);
	$qtyCap1 = stripslashes($row['quantity']);	
  	$query = "SELECT * FROM JavaJam WHERE name = 'Cap2'";	
	$result = $db->query($query);
    $row = $result->fetch_assoc();
	$priceCap2 = stripslashes($row['price']);
	$qtyCap2 = stripslashes($row['quantity']);	
  	$query = "SELECT * FROM JavaJam WHERE name = 'Cafe1'";	
	$result = $db->query($query);
    $row = $result->fetch_assoc();
	$priceCafe1 = stripslashes($row['price']);
	$qtyCafe1 = stripslashes($row['quantity']);	
  	$query = "SELECT * FROM JavaJam WHERE name = 'Cafe2'";	
	$result = $db->query($query);
    $row = $result->fetch_assoc();
	$priceCafe2 = stripslashes($row['price']);
	$qtyCafe2 = stripslashes($row['quantity']);	
	//echo $priceCap2;
	
	$profitJava = $qtyJava * $priceJava;
	$profitCafe1 = $qtyCafe1 * $priceCafe1;
	$profitCafe2 = $qtyCafe2 * $priceCafe2;
	$profitCap1 = $qtyCap1 * $priceCap1;
	$profitCap2 = $qtyCap2 * $priceCap2;
  
	$profitCafes = $profitCafe1 + $profitCafe2;
	$profitCaps = $profitCap1 + $profitCap2;
	$profitTotal = $profitJava + $profitCafes + $profitCaps;
	
	$highest = max($profitJava, $profitCafes, $profitCaps);
	$highestItem = max($profitJava, $profitCafe1, $profitCafe2, $profitCap1, $profitCap2);
	if ($highest == $profitCafes){
		$maxCafe = "Cafe au Lait; ";
	}
	else {
		$maxCafe = "";
	}
	if ($highest == $profitCaps){
		$maxCap = "Cappuchino; ";
	}
	else {
		$maxCap = "";
	}
	if ($highest == $profitJava){
		$maxJava = "Just Java; ";
	}
	else {
		$maxJava = "";
	}
//	
	if ($highestItem == $profitCafe1){
		$maxCafe1 = "Single Cafe au Lait; ";
	}
	else {
		$maxCafe1 = "";
	}
	if ($highestItem == $profitCafe2){
		$maxCafe2 = "Double Cafe au Lait; ";
	}
	else {
		$maxCafe2 = "";
	}	
	if ($highestItem == $profitCap1){
		$maxCap1 = "Single Cappuchino; ";
	}
	else {
		$maxCap1 = "";
	}
	if ($highestItem == $profitCap2){
		$maxCap2 = "Double Cappuchino; ";
	}
	else {
		$maxCap2 = "";
	}	
	if ($highestItem == $profitJava){
		$maxJava = "Just Java; ";
	}
	else {
		$maxJava = "";
	}	
	
	echo $maxCap;
	echo $maxCafe;
	echo $maxJava;
	$mostProfitable = $maxCap . $maxCafe . $maxJava;
	$mostProfitableItem = $maxCafe1 . $maxCafe2 . $maxCap1 . $maxCap2 . $maxJava;
	
/*	
	if ($profitJava > $profitCafes && $profitJava > $profitCaps){
		$mostProfitable = "Just Java";
		$mostProfitableItem = "Just Java";
	}
	elseif ($profitCafes > $profitJava && $profitCafes > $profitCaps){
		$mostProfitable = "Cafe au Lait";
		if ($profitCafe1 > $profitCafe2) {
			$mostProfitableItem = "Single Cafe au Lait";
		}
		else {
			$mostProfitableItem = "Double Cafe au Lait";
		}
	}
	elseif ($profitCaps > $profitJava && $profitCaps > $profitCafes){
		$mostProfitable = "Cappuchino";
		if ($profitCap1 > $profitCap2) {
			$mostProfitableItem = "Single Cappuchino";
		}
		else {
			$mostProfitableItem = "Double Cappuchino";
		}		
	}
*/
	//echo $mostProfitable;
	//echo $mostProfitableItem;
	
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
      <li><a href="report.html">Report</a></li>		  
	 </ul>
    </nav>
  </div>
  <div id="centercolumn">
	 <h1>Profit Report</h1>
       <div class="content">
		  <table border = "0">
		  <tr>
		  <th colspan="2" align = left>Profits from individual product:</th>
		  <th>Item Profit: </th>
		  </tr>
		  <tr>
			<td align = "center">Just Java<br></td>
			<td>Profit from "Just Java" is $<?php echo number_format($profitJava,2);?></td>
			<td>$<?php echo number_format($profitJava,2);?></td>
		  </tr>
		  <tr>
			<td align = "center">Cafe au Lait</td>
			<td>Profit from "Single Cafe au Lait" is $<?php echo number_format($profitCafe1,2);?><br> Profit from "Double Cafe au Lait" is $<?php echo number_format($profitCafe2,2);?></td>
			<td>$<?php echo number_format($profitCafes,2);?></td>
		  </tr>
		  <tr>
			<td align = "center">Iced<br>Cappuchino<br></td>
			<td>Profit from "Single Cappuchino" is $<?php echo number_format($profitCap1,2);?><br> Profit from "Double Cappuchino" is $<?php echo number_format($profitCap2,2);?></td>
			<td>$<?php echo number_format($profitCaps,2);?></td>			
		  </tr>
		  <tr>
			<td></td><td></td><td>Total:<br>$<?php echo number_format($profitTotal,2);?></td>
		  </tr>
		  </table>
		  <p align = center>Most profitable item category is <?php echo $mostProfitable ?><br>Most profitable single item is <?php echo $mostProfitableItem ?></p>
	   </div>
  </div>
  <footer>
    <small><i>Copyright &copy 2014 JavaJam Coffee House<br><a href = "mailto:yiinlih@ong.com">yiinlih@ong.com</a>
	</i></small>
  </footer>
</div>
</body>
</html>