<?php
$counter = 0;
for($r = 1; $r < 10; $r++){
	for($q = 0; $q < 10; $q++){
		for($t = 1; $t < 10; $t++){
			  $rqtr = $r*1000 + $q*100 + $t*10 + $r;
			  $rqq = $r*100 + $q*10 + $q;
			  $rrtr = $r*1000 + $r*100 + $t*10 + $r;
			  if($rqtr + $rqq == $rrtr){
				  echo $rqtr . " + " . $rqq . " = " . $rrtr . "<br>" ;
					$counter++;
			  }
		}
	}
}
echo($counter);
?>