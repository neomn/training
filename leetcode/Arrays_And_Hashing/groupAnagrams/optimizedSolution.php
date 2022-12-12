<?php

class Solution
{
    function groupAnagrams($strs)
    {
        $result = [];
        foreach ($strs as $str){
            $count = array_fill(0,26,0);
            $splited_str = str_split($str);
            foreach ($splited_str as $char){
                $count[ord($char)-ord('a')]++;
            }
        }
    }
}

$samples = [
    ["eat", "tea", "tan", "ate", "nat", "bat"],
    [""],
    ["a"],
    ["",""],
];

//$solution = new Solution();
//foreach ($samples as $sample) {
//    print_r($solution->groupAnagrams($sample));
//    echo "new sample >> ------------------------------------------- \n\n";

print_r(ord('b')-ord('a'));


