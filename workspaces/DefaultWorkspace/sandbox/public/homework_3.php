<?php
## KANDACE
/***************************************************************************************************** 
* A new feature request has risen to top priority that requires showing a list of past purchases.
* 1. Create an associative array with past purchase dates and amounts.
* 2. Iterate the list using a do...while loop displaying the past purchases 
*****************************************************************************************************/ 
/* Associative Arrays */
$past_purchases[] = ['purchase_date' => '2018-06-20', 'amount' => 99.99, 'purchase_info' => 'Toothpaste'];
$past_purchases[] = ['purchase_date' => '2018-06-01', 'amount' => 100.00, 'purchase_info' => 'Walmart'];
$past_purchases[] = ['purchase_date' => '2018-06-07', 'amount' => 300.78, 'purchase_info' => 'Target'];
$past_purchases[] = ['purchase_date' => '2018-06-14', 'amount' => 50.00, 'purchase_info' => 'Flash Foods'];
$past_purchases[] = ['purchase_date' => '2018-06-20', 'amount' => 10.00, 'purchase_info' => 'Shampoo'];
/* Format Todays Date */
$todaysDate = date('Y-m-d');
$i = 0;
echo '     Date    ' . ' | ' . ' Amount ' . ' | ' . ' Purchase Info ' . "\n";
echo '--------------------------------------------' . "\n";
do {
	
	/* Convert Date into Unix Timestamp */
	$stringToTime = strtotime($past_purchases[$i]['purchase_date']);
	
	/* Format Unix Timestamp */
	$newPD = date('m-d-Y', $stringToTime);
	printf('  %10s  | $%6.2f  |  %s' . PHP_EOL, $newPD, $past_purchases[$i]['amount'], $past_purchases[$i]['purchase_info']);	
	$i++;
	
} while ($past_purchases[$i]['purchase_date'] <= $todaysDate);


// alternative which sorts the dates out of the sub-arrays
/* Pull out only the dates */
$dates = array_column($past_purchases, 'purchase_date');
asort($dates);
echo PHP_EOL;
echo '     Date     |  Amount  |  Purchase Info ' . "\n";
echo '--------------------------------------------' . "\n";
foreach ($dates as $key => $value) {
	
	if ($value <= $todaysDate) {
		/* Convert Date into Unix Timestamp */
		$stringToTime = strtotime($past_purchases[$key]['purchase_date']);
		
		/* Format Unix Timestamp */
		$newPD = date('m-d-Y', $stringToTime);
		printf('  %10s  | $%6.2f  |  %s' . PHP_EOL, $newPD, $past_purchases[$key]['amount'], $past_purchases[$key]['purchase_info']);	
	}
}
echo PHP_EOL;

$max = 100;
for ($x = 5; $x < $max; $x++){
// This if evaluation checks to see if number is odd or even
  $test = TRUE;
  for($i = 3; $i < $x; $i++) {
	echo "i " . $i . " " . "x " . $x . " "; 
	echo PHP_EOL; 
    if(($x % $i) === 0) {
	echo PHP_EOL;
      $test = FALSE;
	echo "test " . $test;
      break;
    }
  }
  echo PHP_EOL;
  if ($test) echo $x . ', ';
  echo PHP_EOL;
}

// Removes Comma
//echo substr($output, 0, -2);
 $a=5 < 2;
    echo (gettype($a));

