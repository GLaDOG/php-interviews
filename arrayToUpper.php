<?php

/**
 * 将一个二维数组的值的首字母大写
 */
function arrayToUpper(array $array): array
{
    $arr = [];
    foreach ($array as $k => $item) {
        $keys = array_keys($item);
        print_r($keys);
        $values = array_values($item);
        print_r($values);
        foreach ($keys as $kk => $key) {
            $arr[$k][$key] = ucfirst($values[$kk]);
        }
    }
    return $arr;
}
$array = [
    ['name' => 'shengj', 'sex' => 'male'],
    ['name' => 'wangm', 'sex' => 'female'],
];

print_r(arrayToUpper($array));
