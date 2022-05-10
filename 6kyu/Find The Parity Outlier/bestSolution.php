<?php
function find($a) {
    $odds = [];
    $evens = [];
    foreach ($a as $n) {
        if ($n % 2) array_push($odds, $n);
        else array_push($evens, $n);
    }
    return count($evens) === 1 ? $evens[0] : $odds[0];
}