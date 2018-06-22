<?php   
/*************************************************************
* 1. Write an array of text strings to a file.
* 2. Open the file using fopen().
* 3. read and output the third character from each line.
*************************************************************/

define('NEW_FILE', __DIR__ . '/text.txt');

function addArray($array)
{
	file_put_contents(NEW_FILE, $array);
}


function readArray()
{

	$fh         = fopen( NEW_FILE, 'r' );
    $characters = "";
    
    // Get 3rd Character from each line 
    while(!feof($fh)) {
 	   $characters .= substr(fgets($fh), 2, 1) . "\n";
    }

    fclose($fh);

    return $characters;
}

/* Add array to file */
$array = ["The sky is blue \n", "Red, Black & White \n", "Orange is the new black."];
addArray($array);
    
/* Output 3 Character from each line */
$readArray = readArray();
echo $readArray;
