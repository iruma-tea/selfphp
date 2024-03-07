<?php
function total(float $init, float ...$args): float
{
    $result = $init;
    foreach ($args as $arg) {
        $result += $arg;
    }
    return $result;
}

print total(7, 3, 10);
print total(11, -5, 4, 88);
