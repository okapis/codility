<?php
function gcd($x,$y) {
	if($y==0) {
		return $x;
	} else {
		return gcd($y, fmod($x, $y));
	}
}


echo gcd(12,24);