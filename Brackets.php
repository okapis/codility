<?php
function solution($S) {
	// write your code in PHP5
	$arr = str_split($S);
	if(empty($arr[0])) return 1;
	$cnt = count($S);
	$left = array('{','[','(');
	$right = array('}',']',')');
	$nest = array('{'=>'}','['=>']','('=>')');
	$stack = array();
	foreach($arr as $k => $v) {
		if(in_array($v,$left)) {
			$stack[] = $v;
		}
		if(in_array($v,$right)) {
			if(empty($stack)) return 0;
			if($nest[array_pop($stack)]!=$v) return 0;
		}
	}
	if(empty($stack)) return 1;
	else return 0;
}
