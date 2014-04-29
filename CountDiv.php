<?php
function solution($A, $B, $K) {
    // write your code in PHP5
    if(fmod($A,$K)==0) $result = floor(($B-$A)/$K)+1;
    else $result = floor($B/$K-(floor($A/$K)+1))+1;
    return (int)$result;
}
