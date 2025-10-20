class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $current_sum = 0;
        foreach($nums as $index => $num) {
            $current_sum += $num;
            $sum[$index] = $current_sum;
        }
        return $sum;
    }
}
