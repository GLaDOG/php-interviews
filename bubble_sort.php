<?php
function bubble_sort($arr)
{
    $n = count($arr);

    for ($i=0; $i<$n; $i++) {
        for ($j=$i+1; $j<$n; $j++) {
            if ($arr[$i] > $arr[$j]) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }

    return $arr;
}

$arr = array(-2, 1, 3, 9, -4, 2, 3, 8, -3, -4, 1, 3);
print_r(bubble_sort($arr));
