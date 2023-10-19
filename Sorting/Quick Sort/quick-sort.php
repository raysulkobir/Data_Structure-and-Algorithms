<?php
function quickSort($array){
    // If the array has one or zero elements, it is already sorted.
    if(count($array) < 2){
        return $array;
    }

    $left = $right = array();
    reset($array);
    $pivot_key = key($array);
    $pivot = array_shift($array);
    foreach($array as $k => $v) {
        if($v < $pivot)
            $left[$k] = $v;
        else
            $right[$k] = $v;
    }

    return array_merge(quickSort($left), array($pivot_key => $pivot), quickSort($right));
}

// Example usage:
$array = [38, 27, 43, 3, 9, 82, 10];
$sortedArray = quickSort($array);

echo "Sorted Array: ";
// print_r($sortedArray);
