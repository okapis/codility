<?php
function solution($M, $A) {
    // write your code in PHP5
    $B = array();
    for($i=0;$i<=$M;$i++) {
    	$B[$i] = -1;
    }
    $cnt = count($A);
    $res = 0;
    $index = 0;
    
    for($i=0;$i<$cnt;$i++) {
        if($B[$A[$i]]==-1) {
            $B[$A[$i]]=$i;
        } else {
            $new_index = $B[$A[$i]]+1;
            $res += ($new_index-$index)*($i-$index+$i-$new_index+1)/2;
            if($res>1000000000) return 1000000000;
            for($j=$index;$j<$new_index;$j++) {
            	$B[$A[$j]] = -1;
            }
            $B[$A[$i]] = $i;
            $index = $new_index;
        }
    }
    $res += ($cnt-$index)*($cnt-$index+1)/2;
    if($res>1000000000) $res = 1000000000;
    return $res;
}

echo solution(7,[3, 4, 5, 6, 0, 5, 1, 2]);