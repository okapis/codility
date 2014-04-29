<?php
function solution($A) {
	// write your code in PHP5
	$n = count($A);
	rsort($A);
	if($A[0]<0) {
		return $A[0]*$A[1]*$A[2];
	} else if($A[0]==0) {
		return 0;
	} else {
		if($A[1]*$A[2]>$A[$n-1]*$A[$n-2]) return $A[0]*$A[1]*$A[2];
		else return $A[0]*$A[$n-1]*$A[$n-2];
	}
}
