<?php

	function Add($num1,$num2){
		$sum[] = $num1;
		$sum[] = $num2;
		return array_sum($sum);
	}

	echo Add(3,4);