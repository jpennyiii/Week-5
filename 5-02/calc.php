<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
		$cal=$_POST['calc'];
		$v1=$_POST['val1'];
		$v2=$_POST['val2'];
		$result;
        # test if input is_numeric
        if(is_numeric($_POST['val1']) and is_numeric($_POST['val2'])){
            # test if calc is not null
            if(!empty($_POST['calc'])){	
			echo "hello";
                # switch statement for value of calc
                switch($cal){
				case "add":
					$result=$v1+$v2;
					break;
				case "sub":
					$result=$v1-$v2;
					break;
				case "mul":
					$result=$v1*$v2;
					break;
				case "div":
					$result=$v1/$v2;
					break;
                }
                echo "Calculation result: $result";
            }	
        }
        else{ echo "Invalid entry - please retry"; }
    ?>
</body>
</html>