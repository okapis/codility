<?php
function solution($S) {
    // write your code in PHP5
    $arr = str_split($S);
	$cnt = count($arr);
	if(empty($arr[0])) return 1;
	$stack = array();
	if($arr[0]!="("||$arr[$cnt-1]!=")") return 0;
	foreach($arr as $k=>$v) {
		if($v=="(") $stack[]="(";
		if($v==")") {
			if(empty($stack)) return 0;
			else array_pop($stack);
		}
	}
	if(empty($stack)) return 1;
	else return 0;
}
