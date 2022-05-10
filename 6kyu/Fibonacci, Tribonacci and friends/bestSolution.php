<?php

function Xbonacci(array $s, int $n)
{
    $count = count($s);
    if ($count < $n) $s[] = array_sum($s);
    else if ($count == $n) return $s;
    else if ($n == 0) return [];
    else return array_slice($s, 0, $n);
    while (count($s) < $n) {
        $arr = array_slice($s, -$count, count($s));
        $s[] = array_sum($arr);
    }
    return $s;
}