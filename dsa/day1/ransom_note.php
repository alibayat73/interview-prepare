<?php
class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $magazine_letters = [];
        for ($i = 0; $i < strlen($magazine); $i++) {
            $magazine_letters[$magazine[$i]] = ($magazine_letters[$magazine[$i]] ?? 0) + 1;
        }

        for ($i = 0; $i < strlen($ransomNote); $i++) {
            if (!isset($magazine_letters[$ransomNote[$i]]) || $magazine_letters[$ransomNote[$i]] == 0) {
                return false;
            } else {
                $magazine_letters[$ransomNote[$i]] -= 1;
            }
        }

        return true;
    }
}
