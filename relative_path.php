<?php

/**
 * 计算两个文件的相对路径
 */
function relative_path($path1, $path2)
{
    $arr1 = explode('/', dirname($path1));
    $arr2 = explode('/', dirname($path2));

    for ($i = 0, $len = count($arr2); $i < $len; $i++) {
        if ($arr1[$i] != $arr2[$i]) {
            break;
        }
    }

    $return_path = [];
    // 不在同一个根目录下
    if ($i == 1) {
        $return_path = array();
    }

    // 在同一个根目录下
    if ($i != 1 && $i < $len) {
        $return_path = array_fill(0, $len - $i, '..');
    }

    // 在同一个目录下
    if ($i == $len) {
        $return_path = array('./');
    }

    $return_path = array_merge($return_path, array_slice($arr1, $i));

    return implode('/', $return_path);
}

$a = '/a/b/c/d/e.php';
$b = '/a/b/12/34/c.php';
$c = '/e/b/c/d/f.php';
$d = '/a/b/c/d/g.php';
print_r(explode('/', dirname($a))) . PHP_EOL;

print(relative_path($a, $b)) . PHP_EOL;
print(relative_path($a, $c)) . PHP_EOL;
print(relative_path($a, $d)) . PHP_EOL;
