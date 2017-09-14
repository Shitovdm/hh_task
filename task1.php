﻿<?php 

function parseInt($int){
	(int)$millions = intval($int / 1000000);
	(int)$hundreds_of_thousands = intval(($int % 1000000) / 100000);
	(int)$tens_of_thousands = intval(($int % 100000) / 10000);
	(int)$thousands = intval(($int % 10000) / 1000);
	(int)$hundreds = intval(($int % 1000) / 100);
	(int)$tens = intval(($int % 100) / 10);
	(int)$ones = intval(($int % 10) / 1);

	for($j=0; $j< 7 ;$j++){
		if($j == 0){
			$array[$j] = $millions;
		}
		if($j == 1){
			$array[$j] = $hundreds_of_thousands;
		}
		if($j == 2){
			$array[$j] = $tens_of_thousands;
		}
		if($j == 3){
			$array[$j] = $thousands;
		}
		if($j == 4){
			$array[$j] = $hundreds;
		}
		if($j == 5){
			$array[$j] = $tens;
		}
		if($j == 6){
			$array[$j] = $ones;
		}
	}
	return $array;
}

function charAmount($A){
	$rank_flag = 7;
	
	if(($A[0] == 0)){
		$rank_flag = 6;
	}
	if(($A[0] == 0) and ($A[1] == 0)){
		$rank_flag = 5;
	}
	if(($A[0] == 0) and ($A[1] == 0) and ($A[2] == 0)){
		$rank_flag = 4;
	}
	if(($A[0] == 0) and ($A[1] == 0) and ($A[2] == 0) and ($A[3] == 0)){
		$rank_flag = 3;
	}
	if(($A[0] == 0) and ($A[1] == 0) and ($A[2] == 0) and ($A[3] == 0) and ($A[4] == 0)){
		$rank_flag = 2;
	}
	return $rank_flag;
}
/*
 * Main body!
 * */
for($i = 10; $i < 5400000; $i++){
	$A = parseInt($i);
	$rank_flag = charAmount($A);
	if($rank_flag == 2){
		if($A[5] + $A[6] == 10){
			echo $i . "<br>";
			$Amount++;
		}
	}
	if($rank_flag == 3){
		if(		($A[4] + $A[5] + $A[6] == 10) or 
				(($A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10))){
			echo $i . "<br>";
			$Amount++;
		}
	}
	if($rank_flag == 4){
		if(		($A[3] + $A[4] + $A[5] + $A[6] == 10) or 
				(($A[3] + $A[4] + $A[5] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or 
				(($A[3] + $A[4] == 10) and ($A[5] + $A[6] == 10)) or 
				(($A[3] + $A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10)) or 
				(($A[4] + $A[5] + $A[6] == 10) and ($A[3] + $A[4] == 10))){
			echo $i . "<br>";
			$Amount++;
		}
	}
	if($rank_flag == 5){
		if(		(($A[2] + $A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				(($A[2] + $A[3] + $A[4] + $A[5] == 10) and ($A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				(($A[2] + $A[3] + $A[4] + $A[5] == 10) and ($$A[4] + $A[5] + $A[6] == 10)) or 
				(($A[3] + $A[4] + $A[5] + $A[6] == 10) and ($A[2] + $A[3] + $A[4] == 10)) or 
				(($A[2] + $A[3] == 10) and ($A[3] + $A[4] + $A[5] + $A[6] == 10)) or
				(($A[5] + $A[6] == 10) and ($A[2] + $A[3] + $A[4] + $A[5] == 10)) or
				(($A[2] + $A[3] + $A[4] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or 
				(($A[2] + $A[3] + $A[4] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[4] + $A[5] + $A[6] == 10) and ($A[2] + $A[3] == 10)) or
				(($A[2] + $A[3] == 10) and ($A[5] + $A[6] == 10) and ($A[3] + $A[4] == 10)) or 
				(($A[2] + $A[3] == 10) and ($A[5] + $A[6] == 10) and ($A[4] + $A[5] == 10)) or
				(($A[2] + $A[3] == 10) and ($A[5] + $A[6] == 10) and ($A[3] + $A[4] + $A[5] == 10)) ){
			echo $i . "<br>";
			$Amount++;
		}
	}
	if($rank_flag == 6){
		if(		(($A[1] + $A[2] + $A[3] + $A[4] + $A[5] + $A[6] == 10)) or
				(($A[1] + $A[2] + $A[3] + $A[4] + $A[5] == 10) and ($A[2] + $A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				(($A[1] + $A[2] + $A[3] + $A[4] + $A[5] == 10) and ($A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				(($A[1] + $A[2] + $A[3] + $A[4] + $A[5] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or
				(($A[1] + $A[2] + $A[3] + $A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10)) or 
				(($A[1] + $A[2] + $A[3] + $A[4] == 10) and ($A[2] + $A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				(($A[1] + $A[2] + $A[3] == 10) and ($A[2] + $A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				(($A[1] + $A[2] == 10) and ($A[2] + $A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				(($A[1] + $A[2] + $A[3] + $A[4] == 10) and ($A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				(($A[1] + $A[2] + $A[3] + $A[4] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or 
				(($A[1] + $A[2] + $A[3] + $A[4] == 10) and ($A[5] + $A[6] == 10)) or 
				(($A[1] + $A[2] + $A[3] == 10) and ($A[3] + $A[4] + $A[5] + $A[6] == 10)) or
				(($A[1] + $A[2] == 10) and ($A[3] + $A[4] + $A[5] + $A[6] == 10)) or
				(($A[1] + $A[2] + $A[3] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or
				(($A[1] + $A[2] == 10) and ($A[3] + $A[4] == 10) and ($A[5] + $A[6] == 10)) or 
				(($A[1] + $A[2] == 10) and ($A[2] + $A[3] + $A[4] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[1] + $A[2] == 10) and ($A[3] + $A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[1] + $A[2] == 10) and ($A[2] + $A[3] + $A[4] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or
				(($A[1] + $A[2] == 10) and ($A[3] + $A[4] + $A[5] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or
				(($A[1] + $A[2] == 10) and ($A[3] + $A[4] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or
				(($A[1] + $A[2] + $A[3] == 10) and ($A[3] + $A[4] + $A[5] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or
				(($A[1] + $A[2] + $A[3] == 10) and ($A[2] + $A[3] + $A[4] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or
				(($A[1] + $A[2] + $A[3] == 10) and ($A[2] + $A[3] + $A[4] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[1] + $A[2] + $A[3] == 10) and ($A[3] + $A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[1] + $A[2] + $A[3] == 10) and ($A[3] + $A[4] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[1] + $A[2] + $A[3] == 10) and ($A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[1] + $A[2] == 10) and ($A[2] + $A[3] + $A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10))){
			echo $i . "<br>";
			$Amount++;
		}
	}
	if($rank_flag == 7){
		if(		(($A[0] + $A[1] + $A[2] + $A[3] + $A[4] + $A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] + $A[2] + $A[3] + $A[4] + $A[5] == 10) and ($A[1] + $A[2] + $A[3] + $A[4] + $A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] + $A[2] + $A[3] + $A[4] + $A[5] == 10) and ($A[2] + $A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				(($A[0] + $A[1] + $A[2] + $A[3] + $A[4] + $A[5] == 10) and ($A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				(($A[0] + $A[1] + $A[2] + $A[3] + $A[4] + $A[5] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or 
				(($A[0] + $A[1] + $A[2] + $A[3] + $A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10)) or 
				(($A[0] + $A[1] + $A[2] + $A[3] + $A[4] == 10) and ($A[1] + $A[2] + $A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				(($A[0] + $A[1] + $A[2] + $A[3] == 10) and ($A[1] + $A[2] + $A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				(($A[0] + $A[1] + $A[2] == 10) and ($A[1] + $A[2] + $A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				(($A[0] + $A[1] == 10) and ($A[1] + $A[2] + $A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				
				(($A[0] + $A[1] + $A[2] + $A[3] + $A[4] == 10) and ($A[2] + $A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				(($A[0] + $A[1] + $A[2] + $A[3] + $A[4] == 10) and ($A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				(($A[0] + $A[1] + $A[2] + $A[3] + $A[4] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or 
				(($A[0] + $A[1] + $A[2] + $A[3] + $A[4] == 10) and ($A[5] + $A[6] == 10)) or 
				(($A[0] + $A[1] + $A[2] + $A[3] == 10) and ($A[2] + $A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				(($A[0] + $A[1] + $A[2] == 10) and ($A[2] + $A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				(($A[0] + $A[1] == 10) and ($A[2] + $A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				
				(($A[0] + $A[1] + $A[2] + $A[3] == 10) and ($A[3] + $A[4] + $A[5] + $A[6] == 10)) or 
				(($A[0] + $A[1] + $A[2] + $A[3] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or 
				(($A[0] + $A[1] + $A[2] == 10) and ($A[3] + $A[4] + $A[5] + $A[6] == 10)) or
				
				(($A[0] + $A[1] == 10) and ($A[1] + $A[2] + $A[3] + $A[4] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] == 10) and ($A[2] + $A[3] + $A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] == 10) and ($A[2] + $A[3] == 10) and ($A[3] + $A[4] + $A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] == 10) and ($A[1] + $A[2] == 10) and ($A[3] + $A[4] + $A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] + $A[2] + $A[3] == 10) and ($A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] + $A[2] + $A[3] == 10) and ($A[3] + $A[4] == 10) and ($A[5] + $A[6] == 10)) or
				
				(($A[0] + $A[1] == 10) and ($A[2] + $A[3] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] == 10) and ($A[2] + $A[3] + $A[4] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] + $A[2] == 10) and ($A[3] + $A[4] == 10) and ($A[5] + $A[6] == 10)) or 
				(($A[0] + $A[1]  == 10) and ($A[2] + $A[3] + $A[4] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or
				(($A[0] + $A[1]  == 10) and ($A[1] + $A[2] + $A[3] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] + $A[2]  == 10) and ($A[2] + $A[3] + $A[4] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] + $A[2]  == 10) and ($A[3] + $A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] + $A[2]  == 10) and ($A[3] + $A[4] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] + $A[2]  == 10) and ($A[2] + $A[3] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] + $A[2]  == 10) and ($A[3] + $A[4] + $A[5] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] + $A[2]  == 10) and ($A[2] + $A[3] + $A[4] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] + $A[2]  == 10) and ($A[1] + $A[2] + $A[3] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or
				(($A[0] + $A[1]  == 10) and ($A[1] + $A[2] + $A[3] == 10) and ($A[3] + $A[4] + $A[5] + $A[6] == 10)) or
				(($A[0] + $A[1]  == 10) and ($A[2] + $A[3] + $A[4] == 10) and ($A[3] + $A[4] + $A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] + $A[2] + $A[3]  == 10) and ($A[2] + $A[3] + $A[4] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] + $A[2] + $A[3]  == 10) and ($A[3] + $A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[0] + $A[1]  == 10) and ($A[1] + $A[2] + $A[3] + $A[4] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] + $A[2]  == 10) and ($A[2] + $A[3] + $A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[0] + $A[1]  == 10) and ($A[1] + $A[2] + $A[3] + $A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10)) or
				
				(($A[0] + $A[1]  == 10) and ($A[2] + $A[3] + $A[4] + $A[5] == 10) and ($A[3] + $A[4] + $A[5] + $A[6] == 10)) or
				(($A[0] + $A[1]  == 10) and ($A[1] + $A[2] + $A[3] + $A[4] == 10) and ($A[3] + $A[4] + $A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] + $A[2] + $A[3]  == 10) and ($A[1] + $A[2] + $A[3] + $A[4] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] + $A[2] + $A[3]  == 10) and ($A[2] + $A[3] + $A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] + $A[2]  == 10) and ($A[1] + $A[2] + $A[3] + $A[4] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or
				(($A[0] + $A[1] + $A[2]  == 10) and ($A[2] + $A[3] + $A[4] + $A[5] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or
				
				(($A[0] + $A[1]  == 10) and ($A[2] + $A[3] == 10) and ($A[3] + $A[4] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[0] + $A[1]  == 10) and ($A[1] + $A[2] == 10) and ($A[3] + $A[4] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[0] + $A[1]  == 10) and ($A[2] + $A[3] == 10) and ($A[3] + $A[4] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[0] + $A[1]  == 10) and ($A[2] + $A[3] == 10) and ($A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10)) or
				
				(($A[0] + $A[1]  == 10) and ($A[1] + $A[2] == 10) and ($A[3] + $A[4] == 10) and ($A[4] + $A[5] + $A[6] == 10)) or
				(($A[0] + $A[1]  == 10) and ($A[1] + $A[2] == 10) and ($A[3] + $A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[0] + $A[1]  == 10) and ($A[2] + $A[3] == 10) and ($A[3] + $A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[0] + $A[1]  == 10) and ($A[1] + $A[2] + $A[3] == 10) and ($A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[0] + $A[1]  == 10) and ($A[1] + $A[2] + $A[3] == 10) and ($A[3] + $A[4] == 10) and ($A[5] + $A[6] == 10)) or
				
				(($A[0] + $A[1] + $A[2]  == 10) and ($A[1] + $A[2] + $A[3] == 10) and ($A[4] + $A[5] == 10) and ($A[5] + $A[6] == 10)) or
				(($A[0] + $A[1]  == 10) and ($A[1] + $A[2] == 10) and ($A[3] + $A[4] + $A[5] == 10) and ($A[4] + $A[5] + $A[6] == 10)))
		{
			echo $i . "<br>";
			$Amount++;
		}
	}
	
}
echo "<br>" . "Result: " . $Amount; 

?>