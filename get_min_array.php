<?php
function get_min_array($arr, $k)
{
    $n = count($arr);
    $min_array = array_slice($arr, 0, $k);
    $max_pos = get_max_pos($min_array);
    $max = $min_array[$max_pos];
    for ($i=$k; $i<$n; $i++) {
        if ($arr[$i] < $max) {
            $min_array[$max_pos] = $arr[$i];
            $max_pos = get_max_pos($min_array);
            $max = $min_array[$max_pos];
        }
    }
    return $min_array;
}

function get_max_pos($arr)
{
    $pos = 0;
    for ($i=1; $i<count($arr); $i++) {
        if ($arr[$i] > $arr[$pos]) {
            $pos = $i;
        }
    }
    return $pos;
}

$array = [1, 100, 20, 22, 33, 44, 55, 66, 23, 79, 18, 20, 11, 9, 129, 399, 145, 2469, 58];

$min_array = get_min_array($array, 10);

print_r($min_array);
