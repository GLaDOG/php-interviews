<?php
function get_min_abs_value($arr)
{
    $n = count($arr);
    if (is_same_sign($arr[0], $arr[$n-1])) {
        return $arr[0] >= 0 ? $arr[0] : $arr[$n-1];
    }

    $left = 0;
    $right = $n-1;

    while ($left <= $right) {
        if ($left + 1 === $right) {
            return abs($arr[$left]) < abs($arr[$right]) ? $arr[$left] : $arr[$right];
        }
        $mid = intval(($left + $right)/2);
        if ($arr[$mid]<0) {
            $left = $mid;
        } else {
            $right = $mid;
        }
        print_r($left.','.$mid.','.$right."\n");
    }
}

function is_same_sign($a, $b)
{
    if ($a * $b > 0) {
        return true;
    } else {
        return false;
    }
}

$arr = [-10, -9, -8, -4, -2, 1, 2, 3, 4, 5, 6, 9];
print_r(get_min_abs_value($arr));
