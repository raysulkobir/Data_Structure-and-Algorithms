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

class LinkedListStack
{
    private $top;

    public function __construct()
    {
        $this->top = null;
    }

    public function isEmpty()
    {
        return $this->top === null;
    }

    public function push($data)
    {
        $newNode = new Node($data);
        $newNode->next = $this->top;
        $this->top = $newNode;
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            return null; // Stack is empty
        }

        $data = $this->top->data;
        $this->top = $this->top->next;

        return $data;
    }

    public function peek()
    {
        if ($this->isEmpty()) {
            return null; // Stack is empty
        }

        return $this->top->data;
    }
}

// Usage of the LinkedListStack
$stack = new LinkedListStack();

$stack->push(1);
$stack->push(2);
$stack->push(3);

echo $stack->pop() . PHP_EOL; // Output: 3
echo $stack->pop() . PHP_EOL; // Output: 2
echo $stack->peek() . PHP_EOL; // Output: 1 (without removing)