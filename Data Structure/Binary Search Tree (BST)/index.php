<?php

class Node
{
    public $data;
    public $left;
    public $right;

    public function __construct($data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

class BinarySearchTree
{
    private $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function insert($data)
    {
        $this->root = $this->insertRec($this->root, $data);
    }

    private function insertRec($root, $data)
    {
        if ($root === null) {
            $root = new Node($data);
            return $root;
        }

        if ($data < $root->data) {
            $root->left = $this->insertRec($root->left, $data);
        } elseif ($data > $root->data) {
            $root->right = $this->insertRec($root->right, $data);
        }

        return $root;
    }

    public function search($data)
    {
        return $this->searchRec($this->root, $data);
    }

    private function searchRec($root, $data)
    {
        if ($root === null || $root->data === $data) {
            return $root;
        }

        if ($data < $root->data) {
            return $this->searchRec($root->left, $data);
        }

        return $this->searchRec($root->right, $data);
    }

    public function inOrderTraversal()
    {
        $this->inOrderRec($this->root);
    }

    private function inOrderRec($root)
    {
        if ($root !== null) {
            $this->inOrderRec($root->left);
            echo $root->data . " ";
            $this->inOrderRec($root->right);
        }
    }

    public function preOrderTraversal()
    {
        $this->preOrderRec($this->root);
    }

    private function preOrderRec($root)
    {
        if ($root !== null) {
            echo $root->data . " ";
            $this->preOrderRec($root->left);
            $this->preOrderRec($root->right);
        }
    }

    public function postOrderTraversal()
    {
        $this->postOrderRec($this->root);
    }

    private function postOrderRec($root)
    {
        if ($root !== null) {
            $this->postOrderRec($root->left);
            $this->postOrderRec($root->right);
            echo $root->data . " ";
        }
    }
}

// Example usage:
$bst = new BinarySearchTree();
$bst->insert(11);
$bst->insert(6);
$bst->insert(8);
$bst->insert(19);
$bst->insert(4);
$bst->insert(10);
$bst->insert(5);
$bst->insert(17);
$bst->insert(43);
$bst->insert(49);
$bst->insert(31);

echo "In-order traversal: ";
$bst->inOrderTraversal();
echo "\n";

echo "Pre-order traversal: ";
$bst->preOrderTraversal();
echo "\n";

echo "Post-order traversal: ";
$bst->postOrderTraversal();
echo "\n";

$target = 7;
$result = $bst->search($target);

if ($result !== null) {
    echo "$target found in the BST.";
} else {
    echo "$target not found in the BST.";
}
