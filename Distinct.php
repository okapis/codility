<?php
function solution($A) {
	// write your code in
	$arr = array_count_values($A);
	return count($arr);
}