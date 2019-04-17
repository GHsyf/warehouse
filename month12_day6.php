<!DOCTYPE html>
<html>
<head>
	<title>求出区间出现1的个数</title>
</head>
<body>
	<form action="month12_day6.php">
		最小值 <input type="text" name="min"><br>
		最大值 <input type="text" name="max"><br>
		<input type="submit" name="" value="查询">
	</form>
</body>
</html>

<?php
	$min = isset($_GET['min'])?$_GET['min']:'';
	$max = isset($_GET['max'])?$_GET['max']:'';


   	$sum = 0;
    for($i=$min;$i<=$max;$i++)
    {
        $k = $i;
        while($k!=0){
            if($k%10==1){
                $sum++;
            }
            $k = $k/10;
        }
    }
    echo "一共出现".$sum."次1";

	