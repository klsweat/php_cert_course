<?php
$test = 0; 
$control = 10; 

echo "\n ------- \n";

while($test++){
	echo $test;
	echo $control;
	echo '<br>' . $control-- . ':' . $test . PHP_EOL;

	If ($control === 0) {
	echo $control;
		break;		
	}
}

echo "\n ------- \n";

$i = -1;
while ($i++) {  // this doesnt equal 0 so it will, run only once
while (++$i) {  // this outputs -1 + 0 which equals 0 which is false
    echo $i;
}


echo "\n ------- \n";

$test = 0; 
$control = 10; 
while(++$test) {

	echo '<br>' . $control-- . ':' . $test . PHP_EOL;
	If ($control === 0) {
		break;		
	}

}

?>
