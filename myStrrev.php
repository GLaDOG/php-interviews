<?php
/*
 * 中文字母字符串翻转函数无乱码
 * @param array $arr
 * @return array
 */
echo "<meta charset='utf-8'>";
function myStrrev($str, $encoding='utf-8')
{
    $newstr = '';
    $len = mb_strlen($str);
    for ($i=$len-1; $i>=0; $i--) {
        $newstr .= mb_substr($str, $i, 1);
    }
    return $newstr;
}
$string = '相信woman是正确的.';
echo $string;
echo '<br />';
echo myStrrev($string);
