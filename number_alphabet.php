<?php
function number_alphabet($str)
{
    $number = preg_split('/[a-z]+/', $str, -1, PREG_SPLIT_NO_EMPTY);
    $alphabet = preg_split('/\d+/', $str, -1, PREG_SPLIT_NO_EMPTY);
    $count = count($number);
    for ($i = 0; $i < $count; $i++) {
        echo $number[$i] . ':' . $alphabet[$i] . '</br>';
    }
}
$str = '1a3bb44a2ac';
number_alphabet($str);//1:a 3:bb 44:a 2:ac
