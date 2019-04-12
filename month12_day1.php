<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>day1</title>
</head>
<body>
	<form action="month12_day1.php">
		<label>输入字符串</label>
		<input type="text" name="str">
		<input type="submit" value="Submit">
	</form>
</body>
</html>

<?php 
		$str = isset($_GET['str'])?$_GET['str']:'';
		$res = array();
		$arr = str_split($str);
		$res = array_count_values($arr);
		foreach($res as $k => $v){
			if($v >= 3){
				echo $k;
			}
		}


	
	