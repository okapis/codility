<?php
function solution($n) {
    $d = array_pad(array(), 40, -1);
    $l = 0;
    while ($n > 0) {
        $d[$l] = $n % 2;
        $n = (int)($n / 2);
        $l += 1;
    }
    print_r($d);
    for ($p = 1; $p <= $l/2; ++$p) {
        $ok = True;
        for ($i = 0; $i < $l - $p; ++$i) {
            if ($d[$i] != $d[$i + $p]) {
                $ok = False;
                break;
            }
        }
        if ($ok) {
            return $p;
        }
    }
    return -1;
}
//echo solution(1000000000);
echo bindec("101101101");