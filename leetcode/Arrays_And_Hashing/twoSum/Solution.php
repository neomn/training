<?php

class Solution {


    // remove elements bigger than target , sort the rest elements
    function removeAndSort($nums, $target){

        foreach($nums as $index=>$num){
            if ($num > $target)
                unset($nums[$index]);
        }
        sort($nums);
        return $nums;
    }

    /**
    * @param Integer[] $nums
    * @param Integer $target
    * @return Integer[]
    */
    function twoSum($nums, $target) {
        $nums = $this->removeAndSort($nums, $target);
        return $nums; 
    }
}

    $nums = [15,33,13,35,10,40,5,1,88,54,18,25,22];
    $target = 47;

    $solution = new Solution;
    var_dump( $solution->twoSum($nums, $target));

