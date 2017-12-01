<?php

function substr_utf8($str, $start, $length = null)
{
    $arr = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
    $arr = array_slice($arr, $start, $length);
    return implode('', $arr);
}

function strlen_utf8($str)
{
    $arr = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
    return count($arr);
}

/*
 * 中文字母字符串翻转函数无乱码
 * @param array $arr
 * @return array
 */
function myStrrev($str, $encoding='utf-8')
{
    $newstr = '';
    $len = strlen_utf8($str);
    for ($i=$len-1; $i>=0; $i--) {
        $newstr .= substr_utf8($str, $i, 1);
    }
    return $newstr;
}
$string = 'Python项目开发实战';
print $string . PHP_EOL;
print myStrrev($string) . PHP_EOL;

function strrev_utf8($str)
{
    $arr = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
    $arr = array_reverse($arr);
    return implode('', $arr);
}

print strrev_utf8('美利坚合众国') . PHP_EOL;

