<?php
/**
 * Given a circular linked list, find the node that starts the loop
 */

require_once("../dataStructures/LinkedList.php");


function findLoop($list){
    $slow = $list->next;
    $fast = $list->next->next;

    while($slow != $fast){
        $slow = $slow->next;
        $fast = $fast->next->next;
    }

    $fast = $list;

    while($slow != $fast){
        $fast = $fast->next;
        $slow = $slow->next;
    }

    return $fast;
}

echo "Testing function to the beginning of the loop in a circular linked list...\n";
echo "Creating list...\n";

$one = new LinkedListNode(1);
$two = new LinkedListNode(2);
$three = new LinkedListNode(3);
$four = new LinkedListNode(4);
$five = new LinkedListNode(5);
$six = new LinkedListNode(6);

$one->next = $two;
$two->next = $three;
$three->next = $four;
$four->next = $five;
$five->next = $six;
$six->next = $three;

echo "Finding loop start\n";
$node = findLoop($one);

echo "Loop is at ".$node->data."\n";