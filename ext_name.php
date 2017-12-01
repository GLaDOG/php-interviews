<?php

/**
 * 写5个不同的自己的函数,来获取一个全路径的的文件的扩展名,允许封装 php 库中已有的函数(新浪).
 *
 * @var path
 * @var type
 */
$path = $_SERVER['SCRIP_FILENAME'];
function ext_name($path, $type)
{
    switch ($type) {
        case 1:
            $path = strrchr($path, '.');
            return ltrim($path, '.');
            break;
        case 2:
            $path = substr($path, strrpos($path, '.'));
            return ltrim($path, '.');
            break;
        case 3:
            $path = pathinfo($path);
            return $path['extension'];
            break;
        case 4:
            $path = explode('.', $path);
            return $path[count($path) - 1];
            break;
        case 5:
            $pattern = '/^[^\.]+\.([\w]+)$/';
            return preg_replace($pattern, '${1}', basename($path));
    }
}

$path = "/home/viv/noteBook/php/php7.php";

print ext_name($path, 1) . PHP_EOL;
print ext_name($path, 2) . PHP_EOL;
print ext_name($path, 3) . PHP_EOL;
print ext_name($path, 4) . PHP_EOL;
print ext_name($path, 5) . PHP_EOL;
