<?php
function solution($N, $M) {
	// write your code in PHP5
	return (int)($N/gcd($N,$M));
}
function gcd($x,$y) {
	if($y==0) return $x;
	else return gcd($y, fmod($x, $y));
}