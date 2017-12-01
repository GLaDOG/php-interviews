<?php

/**
 * 将1234567890转换成1,234,567,890,每3个数字用,隔开
 *
 * @var $number
 */
function number_thousands($number)
{
    $number = (string)strrev($number);
    $number = chunk_split($number, 3, ',');
    $number = strrev($number);
    return ltrim($number, ',');
}

$number = 1234567890;
print number_thousands($number) . PHP_EOL;
