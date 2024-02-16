<?php 

class StringManipulator
{
    public static function capitalizeString(string $string) {
        return strtoupper($string);
    }
    
    public static function concatenateString(string $string1, string $string2) {
        return $string1 . $string2;
    }

    public static function countVowels(string $string) {
        $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $c=0;
        for ($i = 0; $i < strlen($string); $i++) {
            if (in_array($string[$i], $vogais)) {
                $c++;
            }
        }
        return $c;
    }
}