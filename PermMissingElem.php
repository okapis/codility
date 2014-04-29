<?php
function solution($A) {
	// write your code in PHP5
	$n = count($A);
	$miss = $n+1-(array_sum($A)-(1+$n)*$n/2);
	return (int)$miss;
}
