<?php
function solution($A) {
    // write your code in PHP5
    $cnt = 0;
    $B = array();
    foreach($A as $v) {
        if(empty($B[abs($v)])) {
            $B[abs($v)]=1;
            $cnt++;
        }
    }
    return $cnt;
}
