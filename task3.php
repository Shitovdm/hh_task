<?php

function my_bcmod( $x )
{
	$take = 5;
	$mod = '';
	do
	{
		$a = (int)$mod.substr( $x, 0, $take );
		$x = substr( $x, $take );
		$mod = $a % 10;
	}
	while ( strlen($x) );
	return (int)$mod;
}

function convertToArray($num){
	$len1 = strlen($num);
	for($i = 0; $i < $len1 ; $i++){
		$Array[($len1-1) - $i] = my_bcmod($num);
		$num = bcdiv($num, 10);
	}
	return  $Array;
}


function sort_number($number){
	$Arr = convertToArray($number);
	sort($Arr, SORT_NUMERIC);
	for($i = 0;$i < count($Arr);$i++){
		$Arr_sort .= $Arr[$i];
	}
	return((integer)$Arr_sort);
}

for($i = 100000; $i < 333333; $i++){
	$first_number = $i*4;
	$second_number = $i*5;
	
	$sort_number_1 = sort_number($first_number);
	$sort_number_2 = sort_number($second_number);
	
	if(($sort_number_1 == $sort_number_2) && ($sort_number_1 == sort_number($i)) && (strlen($sort_number_1) == strlen($sort_number_2))){
		echo $i . "<br><br>" . $first_number . "<br>" . $second_number;
		break;
	}
}


?>