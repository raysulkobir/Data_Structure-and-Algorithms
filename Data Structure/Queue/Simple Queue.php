<?php


class LinearQueue
{
    private $queue = array();

    // Enqueue: Add an element to the end of the queue
    public function enqueue($item)
    {
        array_push($this->queue, $item);
    }

    // Dequeue: Remove and return the element at the front of the queue
    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null; // Queue is empty
        } else {
            return array_shift($this->queue);
        }
    }

    // Check if the queue is empty
    public function isEmpty()
    {
        return empty($this->queue);
    }

    // Get the size of the queue
    public function size()
    {
        return count($this->queue);
    }
}

// Example usage:
$queue = new LinearQueue();

$queue->enqueue("Item 1");
$queue->enqueue("Item 2");
$queue->enqueue("Item 3");

echo "Queue size: " . $queue->size() . "\n"; // Output: Queue size: 3

$item = $queue->dequeue();
echo "Dequeued item: " . $item . "\n"; // Output: Dequeued item: Item 1
