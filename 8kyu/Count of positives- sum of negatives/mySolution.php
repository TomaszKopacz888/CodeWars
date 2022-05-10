<?php
function countPositivesSumNegatives($input) {
    if (count($input)==0) return [];
    else{
        $responseArray=[0=>0, 1=>0];
        foreach ($input as $item){
            if ($item >0) $responseArray[0]+=1;
            else $responseArray[1]+=$item;
        }
        //ksort($responseArray);
        return $responseArray;
    }
}