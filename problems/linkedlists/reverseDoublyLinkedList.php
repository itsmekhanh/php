<?php
/**
 * Implement an algorithm to reverse a Doubly LinkedList
 */

require_once "../dataStructures/LinkedList.php";

echo "Testing function reverse a doubly linked list...\n";
$list = new DoublyLinkedList();
echo "Testing list [1,2,3,4,5]\n";
$list->createListFromArray([1,2,3,4,5]);
echo "Reverse: ";
$list->reverse();
$list->printList();
echo "\nAll done!\n";