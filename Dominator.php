<?php
function solution($A) {
    // write your code in PHP5
    $B = array_count_values($A);
    $max = max($B);
    $cnt = count($A);
    if($max>$cnt/2) {
        $dominator = array_search($max,$B);
        return (int) array_search($dominator,$A);
    } else {
        return -1;
    }
}
