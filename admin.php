
<?php
   // Start session
    session_start();    
    //Unset the variables stored in session
    unset($_SESSION['check']);
  
    //logout condition
?>


<?php
$flag=0;
$filename="password.txt";
$contents = file_get_contents($filename);
if($contents=="")
	{$flag=1;
     echo "First login enter new password!";
 }



	?>

	<?php



if (isset($_POST["submit"])) 
{
	$pass=$_POST["password"];
	$pass=md5($pass."zxcvbnm");
	if($flag==1)
	{
 		file_put_contents($filename,$pass);
 		?>
 			<script type="text/javascript">
			window.open ('admin.php','_self',false)
			</script>
			<?php
	}
	
	if($flag==0)
	{
		
 		$contents = file_get_contents($filename);
 		
 		if($pass==$contents)
 		{
 			$flag=3;
 			?>
 			<script type="text/javascript">
			window.open ('timeline.php','_self',false)
			</script>
			<?php
			$_SESSION['check']="set";
 		}
 		else
 		{
 			echo "Wrong Password !!";
 		}
	}
}




?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/pannel.css">

</head>
<body>
<div>
<form method="post" action="admin.php">
<center>
Input password to login into control pannel:
<br><br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit">
</center>
</form>
</div>
</body>
</html>

