class Solution {

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        foreach ($accounts as $index => $account) {
            $customer_wealth[$index] = array_sum($account);
        }

        return max($customer_wealth);
    }
}
