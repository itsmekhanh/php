<?php
/**
 * Implement logic to delete a node from a Binary Tree
 */

require_once "../dataStructures/BinaryTree.php";

$tree = new BinaryTree();
$tree->createTreeFromArray([1,2,3,4,5,6,7,8]);

echo "Implement logic to delete a node from a Binary Tree\n";
echo "Tree: ";
$tree->printInorder();
echo "\n";
echo "Removing 6\n";
$tree->remove(6);
$tree->printInorder();
echo "\n";
echo "All done!\n";
