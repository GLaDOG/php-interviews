<?php

/**
 * 使用正则获取html里的href属性的值和a标签内的值,并以herf值为key,a标签内的值为value存入二维数组中
 */
function pregToArr(string $str): array
{
    $preg_href = '/href=[\'\"](.*)[\'\"]/i';
    preg_match_all($preg_href, $str, $match_href);
    print_r($match_href);
    $preg_a = '/\>(.*)\<\/a\>/';
    preg_match_all($preg_a, $str, $match_a);
    print_r($match_a);

    $match_href = $match_href[1];
    $match_a = $match_a[1];

    $arr = [];
    foreach ($match_href as $k => $item) {
        $arr[$k][$item] = $match_a[$k];
    }
    return $arr;
}

$str = '
    <ul class="attr">
        <li>
            <a href="www.baidu.com">百度baidu</a>
            <a href=\'www.tecent.com\'>腾讯tengxun</a>
            <a href="www.alibaba.com">阿里巴巴alibaba</a>
        </li>
    </ul>
';

print_r(pregToArr($str));
