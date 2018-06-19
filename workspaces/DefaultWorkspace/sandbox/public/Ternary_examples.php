<?php

$foo = 11;
if( $foo > 10 ) {
    $foo = 10;
} else {
    $foo = null;
}

print_r($foo);

echo PHP_EOL;

// The ternary does NOT yield the same results
$foo = 11;
$foo = ($foo > 10) ? $foo : null;
print_r($foo);

echo PHP_EOL;

// rewritten
$foo = 11;
$foo = ($foo > 10) ? 10 : null;
print_r($foo);

echo PHP_EOL;

// OR maybe we need to rewrite the "if" statement:
// in this case, maybe we want to "cap" the value at 10
// EXAMPLE: paginating a result set from a web query
$foo = 10;
if( $foo > 10 ) {
    $foo = 10;
} else {
    $foo = $foo;
}
print_r($foo);

echo PHP_EOL;

$foo = 9;
$foo = ($foo > 10) ? 10 : $foo;
print_r($foo);
