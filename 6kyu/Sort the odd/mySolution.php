<?php
function sortArray(array $arr): array
{
    for ($i = 0, $i < count($arr) - 1; $i++;) {
        if (!$arr[$i] & 1) {
            continue;
        }
        elseif ($arr[$i] < $arr[$i + 1]) {
            $tmp=$arr[$i]
        }
    }
}
}