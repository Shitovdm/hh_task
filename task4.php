
<?php

function fact($num){
	$fact = 1;
	for($i=1;$i<=$num;$i++){
		$fact = $fact * $i;
	}
	return $fact;
}

function bcfact($num)
{
    if (!filter_var($num, FILTER_VALIDATE_INT) || $num <= 0) {
        throw new InvalidArgumentException(sprintf('Argument must be natural number, "%s" given.', $num));
    }

    for ($result = '1'; $num > 0; $num--) {
        $result = bcmul($result, $num);
    }

    return $result;
}
/*
*	Проверяет, является ли число простым.
*/
function is_prime($n){
    for($x=2; $x <= sqrt($n); $x++) {
        if($n % $x == 0) {
            return false;
        }
    }
    return true;
}
/*
*	Возвращает следующее простое число.
*/
function next_prime($number){
	if($number == 2){
		 return 3;
	}else{
		for($i = ($number+2); $i < 9999999; $i++){
			if(is_prime($i)){
				 return $i;
			}
		}
	}
	
}
/*
*	Функция разбиения числа на простые множители.
*/
function parse_prime_numbers($number){
	$prime = 2;
	$multipliers = array();
	do{
		if($number % $prime == 0){
			//echo($number . "<br>");
			$number = $number/$prime;
			array_push($multipliers,$prime);
		}else{
			$prime = next_prime($prime);
			if(is_prime($number)){
				$prime = $number;
			}
		}
	}while($number != 1);
	return($multipliers);
}




$multipliers = parse_prime_numbers(240000);

for($i = 0; $i < count($multipliers); $i++){
	echo($multipliers[$i] . "<br>");
}
echo("<br>");



$step = 0;

do{
	$step++;
	echo($step . "  [ ");
	$parse_step = parse_prime_numbers($step);
	for($i = 0; $i < count($parse_step); $i++){
		echo($parse_step[$i] . "  ");
	}
	echo("  ] :");

	for($j = 0; $j < count($parse_step); $j++){
		if(in_array($parse_step[$j],$multipliers)){
			$key = array_search($parse_step[$j],$multipliers);
			unset($multipliers[$key]);
			sort($multipliers);
		}	
	}
	for($i = 0; $i < count($multipliers); $i++){
		echo($multipliers[$i] . "  ");
	}
	echo("<br>");
	
}while(count($multipliers) != 0);



echo("m = " . $step . "<br>");

for($i = 0; $i < count($multipliers); $i++){
	echo($multipliers[$i] . "<br>");
}

?>