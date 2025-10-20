<?php
class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        $answer = [];
        for($i = 1; $i <= $n; $i++) {
            $element = '';
            if ($i % 3 == 0) {
                $element .= 'Fizz';
            } 
            if ($i % 5 == 0) {
                $element .= 'Buzz';
            }
            if ($element == '') {
                $element = "$i";
            }

            $answer[$i] = $element;
        }

        return $answer;
    }
}
