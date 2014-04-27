<?php
function solution($A) {
	// write your code in PHP5
	$B = array_count_values($A);
	$max = max($B);
	$cnt = count($A);
	if($max>$cnt/2) {
		$leader = array_search($max,$B);
	} else {
		return 0;
	}
	$result = 0;
	$cnt_leader = 0;
	foreach($A as $k => $v) {
		if($v==$leader) {
			++$cnt_leader;
		}
		if($cnt_leader>($k+1)/2&&$max-$cnt_leader>($cnt-$k-1)/2) ++$result;
	}
	return $result;
}
