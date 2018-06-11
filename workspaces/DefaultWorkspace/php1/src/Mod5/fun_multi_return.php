<?php
function formatCurrency(float $value, string $arg='$') {
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
echo formatCurrency(25, 'pound') ?? null;