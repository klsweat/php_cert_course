<?php
function formatCurrency($value, string $arg='$') {
    if(empty($value))return 'Missing value';
    switch ($arg) {
        case 'euro' :
        case '€' :
            return "€$value";
        case 'pound' :
        case '£' :
            return "£$value";
        case 'dollar' :
        case '$' :
            return "$$value";
    }
    return false;
}
echo formatCurrency(0, 'pound') ?? null;