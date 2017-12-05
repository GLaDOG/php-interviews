<?php

/**
 * 蛇形命名转换为驼峰命名
 */
function SnakeToCamel($value)
{
    $value = ucwords(str_replace(['_', '-'], ' ', $value));
    $value = str_replace(' ', '', $value);
    return lcfirst($value);
}

$str = 'book_by_id';
print SnakeToCamel($str) . PHP_EOL;

/**
 * Camel to Snake
 */
function CamelToSnake($value)
{
    $value = preg_replace('/\s+/u', '', $value);
    $value = strtolower(preg_replace('/(.)(?=[A-Z])/u', '$1' . '_', $value));
    return $value;
}

$str = 'Book By Id';
print CamelToSnake($str) . PHP_EOL;
