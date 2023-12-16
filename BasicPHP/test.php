<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $IndexOfNums1 = $m - 1; // 2
        $IndexOfNums2 = $n - 1; // 2
        $step = $m + $n - 1; // 5

        while ( $step >= 0 ) {
            if ($nums1[$IndexOfNums1] < $nums2[$IndexOfNums2]) {
                $nums1[$step] = $nums2[$IndexOfNums2];
                $IndexOfNums2--;
            } else {
                $nums1[$IndexOfNums1] = $nums2[$IndexOfNums2];
                $IndexOfNums1--;
            }
            $step--;
        }
    }
}



$solution = new Solution();

// Define the input arrays and values
$nums1 = [1, 2, 3, 0, 0, 0];
$m = 3;
$nums2 = [2, 5, 6];
$n = 3;

// Call the merge method on the Solution instance
$solution->merge($nums1, $m, $nums2, $n);

// Display the result
print_r($nums1);