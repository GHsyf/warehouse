<?php

	$arr = [1,2,3,4,5,6];
	//判断是否为奇数的方法
	function odd($num) {
	    //判断是否为整数
	    if (floor($num) == $num) {
	        //如果是奇数会返回true
	        return $num % 2;
	    } else {
	        return false;
	    }
	}

	//判断是否为偶数的方法
	function even($num) {
	    //判断是否为整数
	    if (floor($num) == $num) {
	        //如果是偶数则取反会返回true
	        return !($num % 2);
	    } else {
	        return false;
	    } 
	}
	$arr1 = array_filter($arr,'odd');//奇数
	$arr2 = array_filter($arr,'even');//偶数
	$arr3 = array_merge($arr1,$arr2);//合并
	print_r($arr1);
	echo '<br>';
	//打印偶数
	print_r($arr2);
	echo '<br>';
	print_r($arr3);