<?php

include "../classes/linkedlist.php";

echo "Testing.... reverse a LinkedList!\n";

$list = new LinkedList();
$list->appendByArray([1,2,3,4,5]);

echo "Original list: ";
$list->printList();

echo "Reversing...\n";
echo "Reversed list: ";
$list->reverse();

$list->printList();