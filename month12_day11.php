<?php
	/*
	*给出一个英文字符串，反转句子中单词的顺序，但单词内字符的顺序不变。
	*/
	$str = "student. a am I";

	function ReverSentence($str){
		$arr = explode(" ",$str);
	    $num = count($arr);
	    for ($i=0; $i < $num/2; $i++) { 
	   		$temp = $arr[$i];
	   		$arr[$i] = $arr[$num-$i-1];
	   		$arr[$num-$i-1] = $temp;
	    }
	    return implode(" ",$arr);
	}
    
    echo ReverSentence($str);