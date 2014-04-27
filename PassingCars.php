<?php
function solution($A) {
	// write your code in PHP5
	$cnt = count($A);
	$zero_cnt = 0;
	$passing_cnt = 0;
	for($i=0;$i<$cnt;++$i) {
		$cur = $A[$i];
		if($cur==0) $zero_cnt++;
		if($cur==1) $passing_cnt += $zero_cnt;
		if($passing_cnt>1000000000) return -1;
	}
	return $passing_cnt;
}
