<?php

class Solution {


    // remove elements bigger than target , sort the rest elements , array keys will be preserved
    function removeElementsBiggerThanTargetAndThenSort($nums, $target){
        $numsWithNoBiggerElement = [];
        foreach($nums as $index=>$num){
            if ($num < $target)
                $numsWithNoBiggerElement[$index] = $num;
        }
        sort($numsWithNoBiggerElement);
        return $numsWithNoBiggerElement;
    }

    /**
    * @param Integer[] $nums
    * @param Integer $target
    * @return Integer[]
    */
    function twoSum($nums, $target) {

        $nums = $this->removeElementsBiggerThanTargetAndThenSort($nums, $target);
        $answer = [];
        foreach($nums as $index=>$num)
            foreach($nums as $index2=>$num2)
                if ($index !== $index2 && $num + $num2 === $target){
                    $answer [] = $index;
                    $answer [] = $index2;
                    return $answer;
                }
//        return $nums;
    }
}

    $nums = [15,33,13,35,10,40,5,1,88,54,18,25,22];
    $target = 47;

    $solution = new Solution;
//    var_dump( $solution->removeElementsBiggerThanTargetAndSort($nums, $target));
    var_dump( $solution->twoSum($nums, $target));

