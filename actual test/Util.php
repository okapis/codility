<?php
function random_array($min,$max,$len) {
	$res = array();
	for($i=0;$i<$len;$i++) {
		$res[] = rand($min, $max);
	}
	return $res;
}

function random_string($arr,$len) {
	$min = 0;
	$max = count($arr)-1;
	$res = array();
	for($i=0;$i<$len;$i++) {
		$res[] = $arr[rand($min, $max)];
	}
	return $res;
}

//print_r(random_array(10, 20, 100));
//print_r(random_string(['A','G','S','T'], 100));
echo '[',implode(',', random_array(0, 20, 20)),']';
