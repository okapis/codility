<?php
function solution($A, $B) {
	// write your code in PHP5
	$alive_count      = 0;
	$downstream       = array();
	$downstream_count = 0;
	$cnt              = count($A);
	for($i = 0; $i < $cnt; $i++){
		if($B[$i] == 1){
			$downstream[] = $A[$i];
			$downstream_count++;
		}
		else{
			while($downstream_count != 0){
				if($downstream[count($downstream) - 1] < $A[$i]){
					$downstream_count--;
					array_pop($downstream);
				}
				else{
					break;
				}
			}
			if($downstream_count == 0){
				$alive_count++;
			}
		}
	}
	$alive_count += count($downstream);
	return $alive_count;
}
