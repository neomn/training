<?php

class Solution
{
    function groupAnagrams($strs)
    {
        $groupedAnagrams = [];

        foreach ($strs as $index=>$str) {
            //get first element of strs
            // count chars
            // add key (counted chars) and value (str) to hashmap
            // unset str
            // iterate throw all remaning element of strs and if it is an anagram for previous str ,
                // then add it ro str array
            // unset matched str
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
