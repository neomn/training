<?php

class Solution
{
    function groupAnagrams($strs)
    {
        $alphabets = str_split('abcdefghijklmnopqrstuvwxyz');
        $hashmap = [];
        $result = [];

        // repeat until strs array not empty
        while (count($strs) > 0) {

            // pop an str from strs array
            $str = array_pop($strs);

            // create a hashmap key
            $splitedStr = str_split($str);
            sort($splitedStr);
            $key = '';
            foreach ($splitedStr as $char){
                $charRepeatTimes = substr_count($str, $char);
                $key .= $char . $charRepeatTimes;
            }

           return $key  ;


            //iterate through hashmap and compare key with existing keys in hashmap


            // if no element in hashmap then add key and str to the hashmap as first element

        }

//        return $result;
    }
}

$samples = [
    ["eat", "tea", "tan", "ate", "nat", "bat"],
];

$solution = new Solution();
foreach ($samples as $sample) {
    var_dump($solution->groupAnagrams($sample));
}
