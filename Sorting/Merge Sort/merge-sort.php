<?php
function mergeSort($array){
    if(count($array) < 2){
        return $array;
    }

    $mid = count($array) / 2;
    $left = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);

    $left = mergeSort($left);
    $right = mergeSort($right);
  
    return merge($left, $right);
}

function merge($left, $right){
    $result = [];

    while(count($left) > 0 && count($right) > 0){
        if($left[0] < $right[0]){
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }

    while(count($left) > 0){
        $result[] = array_shift($left);
    }

    while(count($right) > 0){
        $result[] = array_shift($right);
    }

    return $result;
}

// Example usage:
$array = [14, 33, 27, 10, 35, 19, 42, 44];
$sortedArray = mergeSort($array);

echo "Sorted Array: ";
print_r($sortedArray);
