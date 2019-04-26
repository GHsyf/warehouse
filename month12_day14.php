<?php

	function FindNumbersWithSum($array,$sum){
		$min = 0;
		$len = count($array);
		$max = $len -1;
		$num = '';
		while($min<$max){
			$num = $array[$min] + $array[$max];
			if($num > $sum){
				$max--;
			}
			if($num < $sum){
				$min++;
			}
			if($num == $sum){
				return "这两个元素是".$array[$min]."和".$array[$max]."乘积是".$array[$min]*$array[$max];
			}
		}
	}

	$array = [1,2,3,4,5,6,7,8,9];
	$sum = 5;
	echo FindNumbersWithSum($array,$sum);
