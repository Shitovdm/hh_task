<?php
$summ = 1;
$counter = 2;
$tmp_num = 0;
$lap_summ = 1;
$size = 1143;

for($lap = 1; $lap <= ($size-1)/2; $lap++, $counter = $counter+2){
	$tmp_num += 2;
	for($i = 0; $i < 4; $i++){
		$lap_summ += $tmp_num;
		$summ += $lap_summ;
	}
}
echo($summ);
?>