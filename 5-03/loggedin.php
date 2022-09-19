<?php
   // test cookies if is set, display if set
   if(isset($_COOKIE['auth']) and isset($_COOKIE['username'])){
	   echo "cookie ". $_COOKIE['auth'] . " and ".$_COOKIE['username'] ." is found";
   }
   else {
	  header('Location:index.php');
   }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
</head>
<body>
    You are logged in and can access all pages on this web site. <br> <a href="anotherpage.php">
    <br>Visit another page on this site?</a>
</body>
</html>