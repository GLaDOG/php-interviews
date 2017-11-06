<?php
function get_prime2($n)
{
    $result = array();
    for ($i=2; $i<=$n; $i++) {
        $result[] = $i;
    }
    $value = current($result);
    while($value !== false) {
        $result_copy = $result;
        $prime = $value;
        if ($prime > sqrt(max($result))) {
            echo 'break at $prime '.$prime."\n";
            break;
        }
        foreach ($result as $i => $value) {
            if ($value <= $prime) {
                continue;
            }
            $Modulo = $value % $prime;
            if ($Modulo == 0) {
                unset($result_copy[$i]);
            }
        }
        $result = $result_copy;
        $value = next($result);
    }
    $result = array_values($result);
    return $result;
}
print_r(get_prime2(100000));
