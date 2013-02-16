<?php

$past = time() - 100; 

 //this makes the time in the past to destroy the cookie 
setcookie(ID_web_stocks, gone, $past); 
setcookie(Key_web_stocks, gone, $past); 

header("Location: index.php");
?>