<!DOCTYPE html>
<html>
<head>
	<title>水仙花</title>
</head>
<body>
	<form action="month12_day2.php" method="get">
		输入一个三位正整数：<input type="text" name="flower">
		<input type="submit" value="验证">
	</form>
</body>
</html>


<?php
	$flower = isset($_GET['flower'])?$_GET['flower']:'0';

	$bai = floor($flower / 100);
	$shi = floor(($flower-$bai*100) / 10);
	$ge = $flower % 10;
	if($flower == $bai*$bai*$bai+$shi*$shi*$shi+$ge*$ge*$ge){
		echo "true is=".$flower;
	}else{
		echo "false is=".$flower;
	}

?>