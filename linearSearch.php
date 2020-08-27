<?php
function linearSearch($arr, $n){
	for ($i = 0; $i < count($arr); $i++){
		if ($arr[$i] == $n) {return $i;}
	}
	return -1;
}

$arr = array(1,2,3,4,5,6,7,8,9,10);
echo linearSearch($arr, 5);
?>