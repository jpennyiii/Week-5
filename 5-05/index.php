<?php
	$num_visits;
	session_start();
	if(isset($_SESSION['views'])){
    $_SESSION['views'] = $_SESSION['views']+1;
	}
	else{
    $_SESSION['views']=1;
	}
	$num_visits=$_SESSION['views'];
	if($num_visits==5){
		echo "<h4>Thank you for visiting the page a lot.</h4>";
	}if($num_visits==10){
		header('Location:congratulations.php');
	}
	
?>

<h1>Hello</h1>
<p>You have visited this page <?= $num_visits ?> times</p>
<p><a href="?reset=true">Reset</a></p>
