<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        for ($i = 0; $i < strlen($s); $i++) {
            $hash_map[$s[$i]] = ($hash_map[$s[$i]] ?? 0) + 1;
        }

        $letter = array_search(1, $hash_map);
        if ($letter === false) {
            return -1;
        }
        return strpos($s, $letter);
    }
}
