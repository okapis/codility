<?php
function solution($N, $A) {
	// write your code in PHP5
	$cond = $N + 1;
	$cur_max = 0;
	$last_upd = 0;
	$cnt_arr = array ();
	$cnt = count ( $A );
	for($i = 0; $i < $cnt; $i ++) {
		$cur = $A [$i];
		if ($cur == $cond) {
			$last_upd = $cur_max;
		} else {
			$pos = $cur - 1;
			if (! isset ( $cnt_arr [$pos] )) {
				$cnt_arr [$pos] = 0;
			}
			if ($cnt_arr [$pos] < $last_upd) {
				$cnt_arr [$pos] = $last_upd + 1;
			} else {
				$cnt_arr [$pos] ++;
			}
			if ($cnt_arr [$pos] > $cur_max) {
				$cur_max = $cnt_arr [$pos];
			}
		}
	}
	for($i = 0; $i < $N; $i ++) {
		if (! isset ( $cnt_arr [$i] )) {
			$cnt_arr [$i] = 0;
		}
		if ($cnt_arr [$i] < $last_upd) {
			$cnt_arr [$i] = $last_upd;
		}
	}
	return $cnt_arr;
}

