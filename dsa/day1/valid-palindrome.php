<?php
class Solution {
    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $strToCompare = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $s));
        return strrev($strToCompare) == $strToCompare;
    }
}
