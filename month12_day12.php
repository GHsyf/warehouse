<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="month12_day12.php">
		输入一个数： <input type="text" name="num"><br>
		<input type="submit" name="提交">
	</form>
</body>
</html>


<?php
	$num = isset($_GET['num'])?$_GET['num']:'';

	if ($num == '') {
		die;
	}
	function Sum_Solution($n){
		 $r = 0;
         $n && ($r = (Sum_Solution($n - 1) + $n));
         return $r;
	}

	echo Sum_Solution($num);