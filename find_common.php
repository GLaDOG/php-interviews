<?php
/**
 * 寻找两个有序数组里相同的元素
 * @param  array $arr1
 * @param  array $arr2
 * @return array
 */
function find_common($arr1, $arr2)
{
    $common = array();
    $i = $j = 0;
    $count1 = count($arr1);
    $count2 = count($arr2);
    while ($i < $count1 && $j < $count2) {
        if ($arr1[$i] < $arr2[$j]) {
            $i++;
        } elseif ($arr1[$i] > $arr2[$j]) {
            $j++;
        } else {
            $common[] = $arr1[$i];
            $i++;
            $j++;
        }
    }
    return array_unique($common);
}

$arr1 = array(1, 4, 8, 9, 10, 123);
$arr2 = array(8, 10, 123);
print_r(find_common($arr1, $arr2));
