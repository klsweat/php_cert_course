<?php

$cList = ['Mexico', 'US', 'France'];
$i = 0;
$count = count($cList);

while($i < $count){

	switch ($cList[$i]) {
    		case "Mexico":
        		echo "Hola, mundo.";
				echo PHP_EOL;
				break;
			case 'US':
				echo "Hello World";
				echo PHP_EOL;
				break;
			case 'France':
				echo "Bonjour tout le monde";
				echo PHP_EOL;
				break;


	}


	$i++; 
}


