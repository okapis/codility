<?php
function solution($K, $L, $M, $N, $P, $Q, $R, $S) {
    // write your code in PHP5
	$area = 0;
	
	$array_x = array();
	$array_x[]=$K;
	$array_x[]=$M;
	$array_x[]=$P;
	$array_x[]=$R;
	$array_y = array();
	$array_y[]=$N;
	$array_y[]=$L;
	$array_y[]=$S;
	$array_y[]=$Q;
	
	
	sort($array_x);
	sort($array_y);
	
	for ($i=0;$i<3;$i++) {
		for ($j=0;$j<3;$j++) {
			$left_lower_x = $array_x[$i];
			$left_lower_y = $array_y[$j];
			
			$right_upper_x = $array_x[$i+1];
			$right_upper_y = $array_y[$j+1];
			
			if($left_lower_x>=$K&&$left_lower_y>=$L&&$right_upper_x<=$M&&$right_upper_y<=$N) {
				$area += ($right_upper_x-$left_lower_x)*($right_upper_y-$left_lower_y);
			} elseif ($left_lower_x>=$P&&$left_lower_y>=$Q&&$right_upper_x<=$R&&$right_upper_y<=$S) {
				$area += ($right_upper_x-$left_lower_x)*($right_upper_y-$left_lower_y);
			}
		}
	}
	return $area;
}
echo solution(-4, 1, 2, 6, 0, -1, 4, 3);