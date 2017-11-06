<?php
function max_sum_array($arr)
{
    $currSum = 0;
    $maxSum = array();

    for ($i=0; $i<count($arr); $i++) {
        if ($currSum >= 0) {
            $currSum += $arr[$i];
        } else {
            $currSum = $arr[$i];
        }
        $maxSum[] = $currSum;
    }

    return max($maxSum);
}

$arr = array(-2, 1, 3, 9, -4, 2, 3, 8, -3, -4, 1, 3);
print_r(max_sum_array($arr));
