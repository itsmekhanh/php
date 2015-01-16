<?php
/**
 * Write a function to find the distance of 2 BST nodes given the root and the two nodes
 */

require_once("../dataStructures/BinaryTree.php");

echo "Calculate the distance of 2 binary tree nodes!\n";
echo "Testing [1,2,3,4,5,6], finding distance of nodes 2 and 6\n";

$tree = new BinaryTree();
$tree->createTreeFromArray([1,2,3,4,5,6]);
echo "Distance is: ".$tree->distance(2,6);
