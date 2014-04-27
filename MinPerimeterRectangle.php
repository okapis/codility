<?php
function solution($N) {
	// write your code in PHP5
	if($N==1) return 4;
	$is_even = true;
	if(fmod($N,2)==0) $is_even = false;
	$i = 1;
	$result = 0;
	$seed = 1;
	if($is_even) $seed = 2;
	$sqrt_n = sqrt($N);
	while($i<=$sqrt_n) {
		if(fmod($N,$i)==0) {
			if($i>$N/$i) return $result;
			$result = 2*($i+$N/$i);
		}
		$i += $seed;
	}
	return $result;
}