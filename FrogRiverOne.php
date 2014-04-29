<?php
function solution($X, $A) {
	// write your code in PHP5
	$B = array();
	$pass = (1+$X)*$X/2;
	foreach($A as $key => $value) {
		if($value<=$X&&!isset($B[$value])) {
			$B[$value] = 1;
			$pass -= $value;
		}
		if($pass==0) return $key;
	}
	return -1;
}
