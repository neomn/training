<?php
class Solution {

    /**
    * @param Integer[] $nums
    * @param Integer $target
    * @return Integer[]
    */
    function twoSum($nums, $target) {

        sort($nums);
        return $nums;
        
    }
}

$solution = new Solution;
$nums = [15,33,13,35,10,40,5,1,88,54,18,25,22];
$target = 47;
var_dump( $solution->twoSum($nums, $target));
echo 'done';

