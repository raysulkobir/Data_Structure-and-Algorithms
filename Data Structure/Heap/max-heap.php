<?php
class MaxHeap
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

            if ($this->heap[$index] <= $this->heap[$parentIndex]) {
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
        $largest = $index;

        if ($leftChild < count($this->heap) && $this->heap[$leftChild] > $this->heap[$largest]) {
            $largest = $leftChild;
        }

        if ($rightChild < count($this->heap) && $this->heap[$rightChild] > $this->heap[$largest]) {
            $largest = $rightChild;
        }

        if ($largest !== $index) {
            // Swap the values
            [$this->heap[$index], $this->heap[$largest]] = [$this->heap[$largest], $this->heap[$index]];
            $this->heapifyDown($largest);
        }
    }
}

// Example usage:
$maxHeap = new MaxHeap();
$maxHeap->push(35);
$maxHeap->push(33);
$maxHeap->push(42);
$maxHeap->push(10);
$maxHeap->push(14);
$maxHeap->push(19);
$maxHeap->push(27);
$maxHeap->push(44);
$maxHeap->push(26);
$maxHeap->push(31);

echo $maxHeap->pop() . "\n"; // Outputs 20
echo $maxHeap->pop() . "\n"; // Outputs 10
echo $maxHeap->pop() . "\n"; 
echo $maxHeap->pop() . "\n"; 
echo $maxHeap->pop() . "\n"; 
echo $maxHeap->pop() . "\n"; 
echo $maxHeap->pop() . "\n"; 
echo $maxHeap->pop() . "\n"; 
echo $maxHeap->pop() . "\n"; 
echo $maxHeap->pop() . "\n"; 
