<!DOCTYPE html>
<html>
<head>
	<title>丑数</title>
</head>
<body>
	<h2>写一个数判断是不是丑数</h2>
	<form action="month12_day7.php">
		<input type="text" name="count">
		<input type="submit" name="" value="判断">
	</form>
</body>
</html>

<?php
	$number = isset($_GET['count'])?$_GET['count']:'';
    
    if($number == ''){
    	die;
    }else{
    	while($number % 2 == 0){
			$number /= 2;
	    }
				
		while($number % 3 == 0){
			$number /= 3;
		}
			
		while($number % 5 == 0){
			$number /= 5;
		}
		
		if($number == 1){
			echo 'true';
		}else{
			echo 'false';
		}
    }
	
	