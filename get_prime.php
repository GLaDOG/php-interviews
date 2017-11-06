<?php
/**
 * 求n内的质数
 * @param int $n
 * @return array
 */
function get_prime($n)
{
    $result = array(2);
    $next = 1;

    while (true) {
        $next = $next + 2;
        if ($next >= $n) {
            break;
        }
        $flag = false;
        foreach ($result as $x) {
            if ($x > sqrt($next)) {
                $flag = true;
                break;
            }
            $Modulo = $next % $x;
            if ($Modulo == 0) {
                break;
            }
        }
        if ($flag) {
            $result[] = $next;
        }
    }

    return $result;
}

print_r(get_prime(100000));
