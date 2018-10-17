<!doctype html>
<html>
	<head></head>
	<body>
		<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
			Number of carbon and hydrogen and oxygeon:<input type="text" name="x"><br><br>
			<input type="submit" value="Submit"><br><br>
		<form>
		<?php
		$arr=array();
		if(isset($_POST['x'])){
			$x=$_POST['x'];
			$arr=explode(" ",$x);
			$c=intval($arr[0]);
			$h=intval($arr[1]);
			$o=intval($arr[2]);
			#x = number of carbondioxide molecules
			#y = number of water molecules
			#z = number of glucose molecules
			
			$x=(2*$o-$h)/4;
			$y=($h-2*$c+2*$x)/2;
			$z=($c-$x)/6;
			
			if($x<0||(intval($x)!=$x)){
				echo "Error";
			}else if($y<0 || (intval($y)!=$y)){
				echo "Error";
			}else if($z<0 || (intval($z)!=$z)){
				echo "Error";
			}else{
				echo "Number of water:carbondioxide:glucose molecules = ".$y."\n".$x."\n".$z;
			}
			
		}	
		?>
	</body>
</html>