<?php
//Definition for a singly-linked list.
class ListNode 
{
     public $val = 0;
     public $next = null;
     function __construct($val = 0, $next = null) 
     {
        $this->val = $val;
        $this->next = $next;
     }
 }

class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function middleNode($head) {
        $middle_node = $head;
        $last_node = $head;
        while ($last_node != null && $last_node->next != null) {
            $middle_node = $middle_node->next;
            $last_node = $last_node->next->next;
        }

        return $middle_node;
    }
}
