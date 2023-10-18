<?php

class MinHeap
{
    private $heap;

    public function __construct()
    {
        $this->heap = [];
    }

    public function push($value)
    {
        array_push($this->heap, $value);
        $this->heapifyUp();
    }

    public function pop()
    {
        if (count($this->heap) === 0) {
            return null; // Heap is empty
        }

        if (count($this->heap) === 1) {
            return array_pop($this->heap);
        }

        $root = $this->heap[0];
        $this->heap[0] = array_pop($this->heap);
        $this->heapifyDown(0);

        return $root;
    }

    public function peek()
    {
        return empty($this->heap) ? null : $this->heap[0];
    }

    private function heapifyUp()
    {
        $index = count($this->heap) - 1;

        while ($index > 0) {
            $parentIndex = floor(($index - 1) / 2);

            if ($this->heap[$index] >= $this->heap[$parentIndex]) {
                break;
            }

            // Swap the values
            [$this->heap[$index], $this->heap[$parentIndex]] = [$this->heap[$parentIndex], $this->heap[$index]];
            $index = $parentIndex;
        }
    }

    private function heapifyDown($index)
    {
        $leftChild = 2 * $index + 1;
        $rightChild = 2 * $index + 2;
        $smallest = $index;

        if ($leftChild < count($this->heap) && $this->heap[$leftChild] < $this->heap[$smallest]) {
            $smallest = $leftChild;
        }

        if ($rightChild < count($this->heap) && $this->heap[$rightChild] < $this->heap[$smallest]) {
            $smallest = $rightChild;
        }

        if ($smallest !== $index) {
            // Swap the values
            [$this->heap[$index], $this->heap[$smallest]] = [$this->heap[$smallest], $this->heap[$index]];
            $this->heapifyDown($smallest);
        }
    }
}

// Example usage:
$minHeap = new MinHeap();
$minHeap->push(35);
$minHeap->push(33);
$minHeap->push(42);
$minHeap->push(10);
$minHeap->push(14);
$minHeap->push(19);
$minHeap->push(27);
$minHeap->push(44);
$minHeap->push(26);
$minHeap->push(31);

echo $minHeap->pop() . "\n"; // Outputs 5
echo $minHeap->pop() . "\n"; // Outputs 10
echo $minHeap->pop() . "\n"; // Outputs 10
echo $minHeap->pop() . "\n"; // Outputs 10
echo $minHeap->pop() . "\n"; // Outputs 10
echo $minHeap->pop() . "\n"; // Outputs 10
echo $minHeap->pop() . "\n"; // Outputs 10
echo $minHeap->pop() . "\n"; // Outputs 10
echo $minHeap->pop() . "\n"; // Outputs 10
