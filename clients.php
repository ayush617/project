<?php
	require_once('auth.php');
?>
<!DOCTYPE html>
<html>
<title>Control Pannel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="timeline.php" class="w3-bar-item w3-button">Add to timeline</a>
  <a href="clients.php" class="w3-bar-item w3-button">Add new clients</a>
  <a href="admin.php" class="w3-bar-item w3-button">Logout</a>
</div>

<!-- Page Content -->
<div style="margin-left:25%">

<div class="w3-container w3-teal">
  <h1>Control Pannel</h1>
</div>

<div class="w3-container">
<h2>Add clients</h2>
<form method="post" action="clients.php">
		<table>
			<tr>
			<td>Image url:</td>
			<td><input type="text" name="url"></td>
			</tr>
			<tr>
			<td></td>
			<td><input type="submit" name="submit"></td>
			</tr>
		</table>	
	</form>
</div>

</div>
      
</body>
</html>

<?php

if (isset($_POST["submit"])) 
{
	
	$url=$_POST["url"];

$path_to_file = 'ourclients.html';
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace("<!--for-php-->",'<div class="add2cart_slide centered">'.PHP_EOL.'<div class="add2cart_image">'.PHP_EOL.'<span class="text"><i class="ico-angle-right"></i><span>Show Details</span></span>'.PHP_EOL.'</a><a data-rel="magnific-popup" href="'.$url.'" class="add2cart_img">'.PHP_EOL.'<span class="add2cart_zoom"><i class="ico-plus3"></i></span>'.PHP_EOL.'<img src="'.$url.'" alt="Client">'.PHP_EOL.'</a></div></div>'.PHP_EOL.PHP_EOL.'<!--for-php-->',$file_contents);


file_put_contents($path_to_file,$file_contents); 
	
}




?>