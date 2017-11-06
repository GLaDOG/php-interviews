<?php
function quick_sort($arr)
{
    $len = count($arr);

    if ($len <= 1)
        return $arr;

    $left = $right = array();
    $mid_index = $len>>1;
    $mid_value = $arr[$mid_index];

    for ($i = 0; $i < $len; $i++) {
        if ($i == $mid_index)
            continue;

        if ($arr[$i] < $mid_value)
            $left[] = $arr[$i];
        else
            $right[] = $arr[$i];
    }

    return array_merge(quick_sort($left), (array)$mid_value, quick_sort($right));
}

$arr = array(21, 34, 3, 32, 82, 55, 89, 50, 37, 5, 64, 35, 9, 70);
print_r(quick_sort($arr));
