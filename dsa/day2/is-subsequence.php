<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {
        $i = 0;
        $j = 0;
        $s_len = strlen($s);
        while ($i < $s_len && $j < strlen($t)) {
            if ($s[$i] === $t[$j]) {
                $i++;
            }
            $j++;
        }

        return $i === $s_len;
    }
}
