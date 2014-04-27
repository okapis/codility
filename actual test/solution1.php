<?php
function solution($A) {
	// write your code in PHP5
	$res = 1;
	$i = 0;
	while ($A[$i]!=-1) {
		++$res;
		$i = $A[$i];
	}
	return $res;
}
echo solution([1, 4, -1, 3, 2]);