<?php 


if ($contents = file_get_contents('gettysburg.txt')) {
	echo "Results are in place";
}

$win = 'dir *.*';
$linux = 'ls -l';
if(PHP_OS == 'linux'){
$result = shell_exec($linux);
} else {
$result = shell_exec($win);
}

##$result = `ls -l`; 
echo $result; 
