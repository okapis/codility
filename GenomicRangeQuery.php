<?php
function solution($S, $P, $Q) {
	$S      = str_split($S);
	$len    = count($S);
	$lep    = count($P);
	$arr    = array();
	$result = array();
	$clone  = array_fill(0, 4, 0);
	for($i = 0; $i < $len; $i++){
		$arr[$i] = $clone;
		switch($S[$i]){
			case 'A':
				$arr[$i][0] = 1;
				break;
			case 'C':
				$arr[$i][1] = 1;
				break;
			case 'G':
				$arr[$i][2] = 1;
				break;
			default:
				$arr[$i][3] = 1;
				break;
		}
	}
	for($i = 1; $i < $len; $i++){
		for($j = 0; $j < 4; $j++){
			$arr[$i][$j] += $arr[$i - 1][$j];
		}
	}
	for($i = 0; $i < $lep; $i++){
		$x = $P[$i];
		$y = $Q[$i];
		for($a = 0; $a < 4; $a++){
			$sub = 0;
			if($x - 1 >= 0){
				$sub = $arr[$x - 1][$a];
			}
			if($arr[$y][$a] - $sub > 0){
				$result[$i] = $a + 1;
				break;
			}
		}
	}
	return $result;
}