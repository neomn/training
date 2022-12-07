<?php

class Solution
{
    function groupAnagrams($strs)
    {
        $groupedAnagrams = [];
        foreach ($strs as $str) {

        }
        return $groupedAnagrams;
    }
}

$samples = [
    ["eat", "tea", "tan", "ate", "nat", "bat"],
];

$solution = new Solution();
foreach ($samples as $sample) {
    var_dump($solution->groupAnagrams($sample));
}