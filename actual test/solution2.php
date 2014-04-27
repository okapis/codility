<?php
function solution($A) {
	// write your code in PHP5
	
	$cnt = count($A);
	if($cnt==1) return -2;
	sort($A);
	
	$res = abs($A[0]-$A[1]);
	
	for($i=1;$i<$cnt-1;$i++) {
		if(abs($A[$i]-$A[$i+1])<$res) $res = abs($A[$i]-$A[$i+1]);
	}
	
	if($res>100000000) return -1;
	
	return $res;
}
function random_array($min,$max,$len) {
	$res = array();
	for($i=0;$i<$len;$i++) {
		$res[] = rand($min, $max);
	}
	return $res;
}
$arr = random_array(-2147483648, 2147483647, 20);
echo '[',implode(',', $arr),']';
echo solution($arr);