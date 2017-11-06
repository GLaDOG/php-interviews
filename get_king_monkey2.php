<?php
function get_king_monkey2($n, $m)
{
    $r = 0;
    for ($i=2; $i<=$n; $i++) {
        $r = ($r+$m)%$i;
    }
    return $r+1;
}
print_r(get_king_monkey2(10, 3));
