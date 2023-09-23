<?php
class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class SinglyLinkedList
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    // Insert a new node at the end of the list
    public function insert($data)
    {
        $newNode = new Node($data);

        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }

    // Delete a node with a specific value
    public function delete($data)
    {
        if ($this->head === null) {
            return;
        }

        if ($this->head->data === $data) {
            $this->head = $this->head->next;
            return;
        }

        $current = $this->head;
        while ($current->next !== null && $current->next->data !== $data) {
            $current = $current->next;
        }

        if ($current->next !== null) {
            $current->next = $current->next->next;
        }
    }

    // Search for a node with a specific value
    public function search($data)
    {
        $current = $this->head;
        while ($current !== null) {
            if ($current->data === $data) {
                return true; // Node found
            }
            $current = $current->next;
        }
        return false; // Node not found
    }

    // Display the linked list
    public function display()
    {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " -> ";
            $current = $current->next;
        }
        echo "null\n";
    }
}

// Usage example:
$linkedList = new SinglyLinkedList();
$linkedList->insert(10);
$linkedList->insert(20);
$linkedList->insert(30);

$linkedList->display(); // Outputs: 10 -> 20 -> 30 -> null

$linkedList->delete(20); // Delete the node with value 20
$linkedList->display(); // Outputs: 10 -> 30 -> null

$found = $linkedList->search(30); // Search for value 30
if ($found) {
    echo "Value 30 found in the list.\n";
} else {
    echo "Value 30 not found in the list.\n";
}
