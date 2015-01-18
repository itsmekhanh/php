<?php
/**
 * Write a function to sort a stack - bonus points if you can do it without an extra stack
 */

require_once "../dataStructures/Stack.php";

echo "Sorting a stack....\n";
echo "Creating stack [1,3,2,5,4]\n";

$stack = new Stack();
$stack->populate([1,3,2,5,4]);

$sorted = $stack->sort();

echo "Sorted: ";
$sorted->printStack();

echo "\nAll done!\n";