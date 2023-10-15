<?php

function selectionSort(&$arr)
{
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;

        for ($j = $i + 1; $j < $n; $j++) {
            // Find the index of the minimum element in the unsorted part of the array
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }

        // Swap the found minimum element with the element at index $i
        if ($minIndex != $i) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$minIndex];
            $arr[$minIndex] = $temp;
        }
    }
}

// Example usage:
$arr = [64, 25, 12, 22, 11];
selectionSort($arr);
echo "Sorted array: " . implode(', ', $arr);
