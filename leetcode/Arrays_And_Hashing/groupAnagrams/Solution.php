<?php

class Solution
{
    function groupAnagrams($strs)
    {
        $hashmap = [];

        // repeat until strs array get empty
        while (count($strs) > 0) {
            $str = array_pop($strs);

            // generate hashmap key
            if ($str !== ""){
                $splitedStr = str_split($str);
                sort($splitedStr);
                $key = '';
                foreach ($splitedStr as $char) {
                    $charRepeatTimes = substr_count($str, $char);
                    $key .= $char . $charRepeatTimes;
                }
            } else $key = "";

        }
        return $hashmap;
    }
}

$samples = [
    ["eat", "tea", "tan", "ate", "nat", "bat"],
];

$solution = new Solution();
foreach ($samples as $sample) {
    print_r($solution->groupAnagrams($sample));
}
