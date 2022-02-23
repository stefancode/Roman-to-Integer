<?php

class Solution {

    /**
    * @param String $s
    * @return Integer
    */
    function romanToInt($s) {

        $dict = [
            'I'  => 1,
            'IV' => 4,
            'V'  => 5,
            'IX' => 9,
            'X'  => 10,
            'XL' => 40,
            'L'  => 50,
            'XC' => 90,
            'C'  => 100,
            'CD' => 400,
            'D'  => 500,
            'CM' => 900,
            'M'  => 1000,
        ];
     
     
        $s=strtoupper($s);
        if(isset($dict[$s])){
             return $dict[$s];
        }
     
        $result = 0;
        $len = strlen($s);
        for($i=0; $i < $len; $i++){
            $r = $s[$i];
            $result += $dict[$r];
            if(0 <= $i - 1){
                $prevr = $s[$i - 1];
                $prevValue = $dict[$prevr];
            
                if(isset($prevValue) && $prevValue < $dict[$r]){
                    $result -= $prevValue * 2;
                }
            }
        }
    return $result;
    }
}