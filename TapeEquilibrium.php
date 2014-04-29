<?php
function solution($A) {
    // write your code in PHP5
    $head = $A[0];
    $tail = array_sum($A)-$A[0];
	$min_diff = abs($head-$tail);
	for($i=1,$cnt=count($A);$i<$cnt-1;++$i) {
	    $head += $A[$i];
	    $tail -= $A[$i];
	    if($min_diff>abs($head-$tail)) $min_diff = abs($head-$tail);
	}
	return $min_diff;
}
