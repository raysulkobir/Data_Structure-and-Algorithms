<?php

class Node
{
    public $data;
    public $next;
    public $prev;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
        $this->prev = null;
    }
}

class DoublyLinkedList
{
    public $head;
    public $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    // Insert a new node at the end of the list
    public function insert($data)
    {
        $newNode = new Node($data);

        if ($this->head === null) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $newNode->prev = $this->tail;
            $this->tail->next = $newNode;
            $this->tail = $newNode;
        }
    }

    // Delete a node with a specific value
    public function delete($data)
    {
        $current = $this->head;

        while ($current !== null) {
            if ($current->data === $data) {
                if ($current === $this->head) {
                    $this->head = $current->next;
                    if ($this->head !== null) {
                        $this->head->prev = null;
                    }
                } else {
                    $prev = $current->prev;
                    $next = $current->next;
                    $prev->next = $next;
                    if ($next !== null) {
                        $next->prev = $prev;
                    } else {
                        $this->tail = $prev;
                    }
                }
                return;
            }
            $current = $current->next;
        }
    }

    // Display the linked list from head to tail
    public function displayForward()
    {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " <-> ";
            $current = $current->next;
        }
        echo "null\n";
    }

    // Display the linked list from tail to head
    public function displayBackward()
    {
        $current = $this->tail;
        while ($current !== null) {
            echo $current->data . " <-> ";
            $current = $current->prev;
        }
        echo "null\n";
    }
}

// Usage example:
$doublyLinkedList = new DoublyLinkedList();
$doublyLinkedList->insert(10);
$doublyLinkedList->insert(20);
$doublyLinkedList->insert(30);

$doublyLinkedList->displayForward(); // Outputs: 10 <-> 20 <-> 30 <-> null
$doublyLinkedList->displayBackward(); // Outputs: 30 <-> 20 <-> 10 <-> null

$doublyLinkedList->delete(20); // Delete the node with value 20

$doublyLinkedList->displayForward(); // Outputs: 10 <-> 30 <-> null
$doublyLinkedList->displayBackward(); // Outputs: 30 <-> 10 <-> null
