<?php

class Node {
public $data;
public $next;

public function __construct($data) {
$this->data = $data;
$this->next = null;
}
}

class CircularSinglyLinkedList {
public $head;

public function __construct() {
$this->head = null;
}

public function isEmpty() {
return $this->head === null;
}

public function addToFront($data) {
$newNode = new Node($data);

if ($this->isEmpty()) {
$newNode->next = $newNode; // Point to itself to form the loop
$this->head = $newNode;
} else {
$newNode->next = $this->head;
$current = $this->head;
while ($current->next !== $this->head) {
$current = $current->next;
}
$current->next = $newNode;
$this->head = $newNode;
}
}

public function removeFromFront() {
if ($this->isEmpty()) {
return null;
}

$data = $this->head->data;

if ($this->head->next === $this->head) {
$this->head = null;
} else {
$current = $this->head;
while ($current->next !== $this->head) {
$current = $current->next;
}
$current->next = $this->head->next;
$this->head = $this->head->next;
}

return $data;
}

public function display() {
if ($this->isEmpty()) {
return;
}

$current = $this->head;
do