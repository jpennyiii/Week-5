<?php
	if(isset($_POST['submitt'])){
	if(isset($_POST['username']) and isset($_POST['password'])){
		$ok="ok";
		$user=$_POST['username'];
		setcookie('auth',$ok, time()+3600);
		setcookie('username',$user,time()+3600);
		header('Location:anotherpage.php');
	}
	}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    Name: <input type="text" name="username">
    Password: <input type="text" name="password"><br/><br/>
    <input type="submit" name="submitt" value="Log Me In">
    </form>
</body>
</html>