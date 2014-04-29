<?php
function solution($A) {
    // write your code in PHP5
    $B = array();
	for($i=1,$cnt=count($A);$i<=$cnt;++$i) {
	    if($A[$i-1]>$cnt) return 0;
	    if(!isset($B[$A[$i-1]])) $B[$A[$i-1]] = $A[$i-1];
	    else return 0;
	}
	return 1;
}
