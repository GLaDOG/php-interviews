<?php

/**
 * 对二位数组进行排序
 */
function array_sort($arr, $row, $type = SORT_ASC)
{
    foreach ($arr as $key => $item) {
        $volume[$key] = $item[$row];
    }

    array_multisort($volume, $type, $arr);

    return $arr;
}

$table = array(
    array('id' => 1, 'name' => 'xiaoer', 'age' => 24),
    array('id' => 3, 'name' => 'wangsi', 'age' => 33),
    array('id' => 5, 'name' => 'lisan', 'age' => 50),
    array('id' => 7, 'name' => 'ada', 'age' => 16),
);

print_r(array_sort($table, 'name', SORT_DESC));
