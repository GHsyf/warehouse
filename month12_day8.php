<!DOCTYPE html>
<html>
<head>
	<title>小朋友拿礼物</title>
</head>
<body>
	<form action="">
		输入小朋友个数<input type="text" name="number"><br>
		输入淘汰数 <input type="text" name="num"><br>
		<input type="submit" name="" value="查询">
	</form>
</body>
</html>

<?php
	$number = isset($_GET['number'])?$_GET['number']:'';
	$num = isset($_GET['num'])?$_GET['num']:'';

	if($number == '' || $num == ''){
		die;
	}
	//生成队列
	$list = range(1, $number);
	//定义计数器
	$i = 1;
	while (count($list)>1) {
		foreach ($list as $key => $value) {
			if($i == $num){
				unset($list[$key]);
				$i = 1;
			}else{
				$i++;
			}
		}
	}
	$arr = array_keys($list);
	echo '最后一位小朋友编号是'.$arr['0'];
	