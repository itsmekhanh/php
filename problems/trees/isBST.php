<?php
/**
 * Write a function to determine if a tree is a BST
 */
require_once "../dataStructures/BinaryTree.php";

echo "Implementing a function to determine if it is a BST or NOT\n";
$tree = new BinarySearchTree();
$tree->createTreeFromArray([20,10,30,5,15,25,35]);
$tree->printInorder();

echo "\nIs this tree a binary search tree? ";
echo $tree->isBST() ? "Yes\n":"No\n";

echo "Testing another BST tree\n";
$tree2 = new BinaryTree();
$tree2->createTreeFromArray([1,2,3,4]);
$tree2->printInorder();
echo "\nIs this tree a binary search tree? ";
echo $tree2->isBST() ? "Yes\n": "No\n";
echo "All done!\n";

