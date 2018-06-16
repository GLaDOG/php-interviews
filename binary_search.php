<?php
function binary_search($array, $n, $value)
{
    $left = 0;
    $right = $n-1;
    while ($left <= $right) {
        $mid = intval(($left + $right) / 2);
        if ($value > $array[$mid]) {
            $left = $mid+1;
        } elseif ($value < $array[$mid]) {
            $right = $mid-1;
        } else {
            return $mid;
        }
    }
    return -1;
}

$arr = [-10, -9, -8, -4, -2, 0, 1, 2, 3, 4, 5, 6, 9];
print_r(binary_search($arr, count($arr), 4)) . PHP_EOL;
