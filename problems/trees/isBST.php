<?php
/**
 * Write a function to determine if a tree is a BST
 */
require_once "../dataStructures/BinaryTree.php";

echo "Implementing a function to determine if it is a BST or NOT\n";
$tree = new BinarySearchTree();
$tree->createTreeFromArray([20,10,30,5,15,25,35]);
$tree->printInorder();

