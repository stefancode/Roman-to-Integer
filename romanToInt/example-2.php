<?php
// Note - works only with php8 and higher
class Solution {

    /**
    * @param String $s
    * @return Integer
    */
    function romanToInt($s) {
        $result = 0;
        if(str_contains($s, "IV")){
            $s = $this->removeFromString($s,"IV");
            $result += 4;
        }
        if(str_contains($s, "IX")){
            $s = $this->removeFromString($s,"IX");
            $result += 9;
        }
        if(str_contains($s, "XL")){
            $s = $this->removeFromString($s,"XL");
            $result += 40;
        }
        if(str_contains($s, "XC")){
            $s = $this->removeFromString($s,"XC");
            $result += 90;
        }
        if(str_contains($s, "CD")){
            $s = $this->removeFromString($s,"CD");
            $result += 400;
        }
        if(str_contains($s, "CM")){
            $s = $this->removeFromString($s,"CM");
            $result += 900;
        }
        if(str_contains($s, "I")){
            $symborNum = $this->getNumOfCharInString($s, "I");
            $s = $this->removeFromString($s,"I");
            $result += 1 * $symborNum;
        }
        if(str_contains($s, "V")){
            $s = $this->removeFromString($s,"V");
            $result += 5;
        }
        if(str_contains($s, "X")){
            $symborNum = $this->getNumOfCharInString($s, "X");
            $s = $this->removeFromString($s,"X");
            $result += 10 * $symborNum;
        }
        if(str_contains($s, "L")){
            $s = $this->removeFromString($s,"L");
            $result += 50;
        }
        if(str_contains($s, "C")){
            $symborNum = $this->getNumOfCharInString($s, "C");
            $s = $this->removeFromString($s,"C");
            $result += 100 * $symborNum;
        }
        if(str_contains($s, "D")){
            $s = $this->removeFromString($s,"D");
            $result += 500;
        }
        if(str_contains($s, "M")){
            $symborNum = $this->getNumOfCharInString($s, "M");
            $s = $this->removeFromString($s,"M");
            $result += 1000 * $symborNum;
        }
        return $result;
    }

    private function removeFromString($string, $char){
        return str_replace($char, "", $string);       
    }

    private function getNumOfCharInString($string, $char){
        return substr_count($string, $char); 
    }
}