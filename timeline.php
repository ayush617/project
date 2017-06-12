<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="timeline.php">
		<table>
			<tr>
			<td>Number:</td>
			<td><input type="number" name="id"></td>
			</tr>
			<tr>
			<td>Headding:</td>
			<td><input type="text" name="head"></td>
			</tr>
			<tr>
			<td>Subtitle:</td>
			<td><input type="text" name="sub"></td>
			</tr>
			<tr>
			<td>Info:</td>
			<td><input type="textbox" name="info"></td>
			</tr>
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
</body>
</html>

<?php

if (isset($_POST["submit"])) 
{
	$id=$_POST["id"];
	$head=$_POST["head"];
	$sub=$_POST["sub"];
	$info=$_POST["info"];
	$url=$_POST["url"];

$path_to_file = 'timeline.html';
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace("<!--for-php-->",'<div class="demo-card demo-card--step">'.PHP_EOL.'<div class="head">'.PHP_EOL.'<div class="number-box">'.PHP_EOL.'<span>'.$id.'</span>'.PHP_EOL.'</div>'.PHP_EOL.'<h2>'.$head.'<span class="small">'.$sub.'</span> </h2>'.PHP_EOL.'			</div>'.PHP_EOL.'<div class="body">'.PHP_EOL.'<p>'.$info.'</p>'.PHP_EOL.'<img src="'.$url.'" alt="Graphic">'.PHP_EOL.'</div>'.PHP_EOL.'
		</div>'.PHP_EOL.PHP_EOL."<!--for-php-->",$file_contents);
file_put_contents($path_to_file,$file_contents); 
	
}




?>