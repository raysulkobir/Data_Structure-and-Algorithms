<?php


// Creating a hash table (associative array)
$hashTable = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3',
    'key4' => 'value4'
);

// Search operation
function search($hashTable, $key) {
    if (isset($hashTable[$key])) {
        return $hashTable[$key];
    } else {
        return "Key not found";
    }
}

// Insert operation
function insert(&$hashTable, $key, $value) {
    $hashTable[$key] = $value;
}

// Delete operation
function delete(&$hashTable, $key) {
    if (isset($hashTable[$key])) {
        unset($hashTable[$key]);
    }
}

// Perform operations
echo "Original Hash Table:\n";
print_r($hashTable);

// Search operation
$searchResult = search($hashTable, 'key2');
echo "\nSearch Result for 'key2': $searchResult\n";

// Insert operation
insert($hashTable, 'key5', 'value5');
echo "\nAfter Inserting 'key5':\n";
print_r($hashTable);

// Delete operation
delete($hashTable, 'key3');
echo "\nAfter Deleting 'key3':\n";
print_r($hashTable);

?>
