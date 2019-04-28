<?php

	function Find($target,$array){
		$len = count($array);
		$lens = count($array[0]);
		$i = 0;
		$j = $lens - 1;
		while($i<$len && $j >= 0){
			if($target == $array[$i][$j]){
				return 'true';
			}else if($target < $array[$i][$j]){
				$j--;
			}else{
				$i++;
			}
		}
		return 'false';
	}


	$array = [[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
	$target = 7;
	echo Find($target,$array);