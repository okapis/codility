<?php
function solution($A) {
    // write your code in PHP5
    $n = count($A);
	sort($A);
	for($i=0;$i<$n-2;++$i) {
	    if(($A[$i]+$A[$i+1])>$A[$i+2]) return 1;
	}
	return 0;
}
