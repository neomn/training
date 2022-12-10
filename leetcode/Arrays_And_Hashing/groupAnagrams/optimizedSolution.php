<?php

class Solution
{
    function groupAnagrams($strs)
    {

    }
}

$samples = [
    ["eat", "tea", "tan", "ate", "nat", "bat"],
    [""],
    ["a"],
    ["",""],
];

$solution = new Solution();
foreach ($samples as $sample) {
    print_r($solution->groupAnagrams($sample));
}
