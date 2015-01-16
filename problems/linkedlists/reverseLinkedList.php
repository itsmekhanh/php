<?php
/**
 * Write a function to reverse a linked list.
 */

include_once("../dataStructures/LinkedList.php");

$list = new LinkedList();

echo "Reversing a linked list...\n";
echo "Testing [1,2,3,4,5]...\n";

$list->createListFromArray([1,2,3,4,5]);
$list->reverse();

echo "Reversed: ".$list->printList()."\n";

echo "Testing [1,4,7,2,6]...\n";

$list->createListFromArray([1,4,7,2,6]);
$list->reverse();

echo "Reversed: ".$list->printList()."\n";
echo "All done!\n";