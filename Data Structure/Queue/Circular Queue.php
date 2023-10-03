<?php

class CircularQueue
{
    private $queue = array();
    private $front = 0;
    private $rear = -1;
    private $size = 0;
    private $capacity;

    public function __construct($capacity)
    {
        $this->capacity = $capacity;
    }

    public function enqueue($job)
    {
        if ($this->isFull()) {
            echo "Queue is full. Cannot enqueue $job.\n";
        } else {
            $this->rear = ($this->rear + 1) % $this->capacity;
            $this->queue[$this->rear] = $job;
            $this->size++;
            echo "Enqueued: $job\n";
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            echo "Queue is empty. Cannot dequeue.\n";
            return null;
        } else {
            $job = $this->queue[$this->front];
            $this->front = ($this->front + 1) % $this->capacity;
            $this->size--;
            return $job;
        }
    }

    public function isEmpty()
    {
        return $this->size == 0;
    }

    public function isFull()
    {
        return $this->size == $this->capacity;
    }

    public function getSize()
    {
        return $this->size;
    }
}

// Example usage:
$queue = new CircularQueue(5);

$queue->enqueue("Job 1");
$queue->enqueue("Job 2");
$queue->enqueue("Job 3");

echo "Queue size: " . $queue->getSize() . "\n"; // Output: Queue size: 3

$job = $queue->dequeue();
echo "Dequeued job: $job\n"; // Output: Dequeued job: Job 1

$queue->enqueue("Job 4");
$queue->enqueue("Job 5");
$queue->enqueue("Job 6"); // This will show a "Queue is full" message

$job = $queue->dequeue();
echo "Dequeued job: $job\n"; // Output: Dequeued job: Job 2
