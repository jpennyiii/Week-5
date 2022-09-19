<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
			$nd=$_POST['username'];
			$cd=isset($_POST['color']);
			$dd=$_POST['dish'];
			if (!empty($nd) and $cd==true and !empty($dd)){
				
				$name=$_POST['username'];
				$color=$_POST['color'];
				$dish=$_POST['dish'];
			echo "Thanks for your selection ".$name ." <br> Your really enjoyed ". $dish . " with Greek Salad" . "<br> - especially with a nice ".$color . " wine";
			}
			else{
				$lnk="index.php";
				echo "Invalid input please try again. <a href='".$lnk."'>Click here</a>";
			}	
   ?>
</body>
</html>