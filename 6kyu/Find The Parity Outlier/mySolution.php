<?php
function find(array $integers)
{
    $countEven = 0;
    $countOdd = 0;
    $arr=[];
    foreach ($integers as $item) {
        if (!($item & 1)) {
            $countEven++;
            if ($countEven == 2) {
                $arr= array_filter($integers, function ($var) {
                    return $var & 1;
                });
            }
        } elseif ($item & 1) {
            $countOdd++;
            if ($countOdd == 2) {
                $arr= array_filter($integers, function ($var) {
                    return !($var & 1);
                });
            }
        }
    }
    return (int)implode($arr);
}