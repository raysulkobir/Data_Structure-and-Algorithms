<?php

class DisjointSet
{
    private $parent = array(); // Parent array to store representative elements of sets
    private $rank = array();   // Rank array to store the depth of trees

    public function makeSet($element)
    {
        $this->parent[$element] = $element; // Initialize the parent of the element as itself
        $this->rank[$element] = 0;          // Initialize the rank of the element as 0
    }

    public function find($element)
    {
        if ($element !== $this->parent[$element]) {
            // If the element is not its own parent, recursively find the representative
            $this->parent[$element] = $this->find($this->parent[$element]);
        }
        return $this->parent[$element];
    }

    public function union($element1, $element2)
    {
        $root1 = $this->find($element1);
        $root2 = $this->find($element2);

        if ($root1 !== $root2) {
            // Attach the root of the tree with smaller rank to the root of the tree with larger rank
            if ($this->rank[$root1] > $this->rank[$root2]) {
                $this->parent[$root2] = $root1;
            } elseif ($this->rank[$root1] < $this->rank[$root2]) {
                $this->parent[$root1] = $root2;
            } else {
                // If ranks are equal, choose one as the root and increment its rank
                $this->parent[$root2] = $root1;
                $this->rank[$root1]++;
            }
        }
    }
}

// Example usage:
$dsu = new DisjointSet();

$elements = ['A', 'B', 'C', 'D', 'E'];
foreach ($elements as $element) {
    $dsu->makeSet($element);
}

$dsu->union('A', 'B');
$dsu->union('B', 'C');
$dsu->union('D', 'E');

echo $dsu->find('C'); // Outputs 'A' because A, B, and C are in the same set
echo $dsu->find('E'); // Outputs 'D' because D and E are in the same set
