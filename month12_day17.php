<?php

	function Combine($arr_A,$arr_B){
		$len_A = count($arr_A);
		$len_B = count($arr_B);
		$array = [];
		$i = 0;
		$j = 0;
		$k = 0;
		while ($i<$len_A && $j<$len_B) {
			if($arr_A[$i] <= $arr_B[$j]){
				$array[$k++] = $arr_A[$i++];
			}else{
				$array[$k++] = $arr_B[$j++];
			}
		}
		while($i < $len_A){
			$array[$k++] = $arr_A[$i++];
		}
		while($j < $len_B){
			$array[$k++] = $arr_B[$j++];
		}
		return $array;
		
	}


	$arr1 = [1,3,6,9];
	$arr2 = [2,4,5,8,20];
	print_r(Combine($arr1,$arr2));