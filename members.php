<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php 

 // Connects to your Database 

 mysql_connect("localhost", "stocks", "123456") or die(mysql_error()); 

 mysql_select_db("stocks") or die(mysql_error()); 

 
 //checks cookies to make sure they are logged in 

 if(isset($_COOKIE['ID_web_stocks'])) 

 { 

 	$username = $_COOKIE['ID_web_stocks']; 

 	$pass = $_COOKIE['Key_web_stocks']; 

 	 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error()); 

 	while($info = mysql_fetch_array( $check )) 	 

 		{ 

 

 //if the cookie has the wrong password, they are taken to the login page 

 		if ($pass != $info['password']) 

 			{ 			header("Location: index.php"); 

 			} 

 

 //otherwise they are shown the admin area	 

 	else 

 			{ 

 			 echo "Admin Area<p>"; 

 echo "Your Content<p>"; 

 echo "<a href=logout.php>Logout</a>"; 

 			} 

 		} 

 		} 

 else 

 

 //if the cookie does not exist, they are taken to the login screen 

 {			 

 header("Location: index.php"); 

 } 

 ?>
 <html/>