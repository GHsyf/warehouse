<?php
	
	function NumberOf1($n){
		$i = 0;
		while ($n != 0) {
			$i++;
			$n &= ($n - 1);
		}
		return $i;
	}

	echo NumberOf1(10);