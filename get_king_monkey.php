<?php

function get_king_monkey($n, $m)
{
    $arr = range(1, $n);

    $i = 0;

    while (count($arr) > 1) {
        $i++;
        $survice = array_shift($arr);
        if ($i % $m != 0) {
            array_push($arr, $survice);
        }
    }
    return $arr[0];
}

print_r(get_king_monkey(10, 3));
