<!doctype html>
<html>
	<head></head>
	<body>
		<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
			Enter number of dogs and employees<input type="text" name="x"><br><br>
			Enter size of dogs<input type="text" name="y"><br><br>
			<input type="submit" value="Submit"><br><br>
		</form>
		<?php
			$arr=array();
			if(isset($_POST['x'])){
				$x=$_POST['x'];
				$arr=explode(" ",$x);
				$N=intval($arr[0]);
				$K=intval($arr[1]);
				$size = array();
				if(isset($_POST['y'])){
					$y=$_POST['y'];
					$size=explode(" ",$y);
					sort($size);

					$range = array();
					for($i = 1; $i<$N; $i++){
						$range[$i-1] = $size[$i]- $size[$i-1];
					}

					sort($range);
					
					$minimumSum = $size[$N -1] - $size[0];
					if($K > 1) $minimumSum -= array_sum(array_slice($range, -($K-1)));

					echo $minimumSum;
				}	
			}
		?>
	</body>
</html>

