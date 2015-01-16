<?php
/**
 * Write a function to reverse a linked list
 */

include_once("./structures/linkedlist.php");

function reverse($head){
    $working = $head;
    $prev = null;

    while($working->next != null){
        $next = $working->next;
        $working->next = $prev;
        $prev = $working;
        $working = $next;
    }
    $working->next = $prev;
    return $working;
}

$one = new LinkedListNode(1);
$two = new LinkedListNode(2);
$three = new LinkedListNode(3);
$four = new LinkedListNode(4);
$five = new LinkedListNode(5);

$four->next = $five;
$three->next = $four;
$two->next = $three;
$one->next = $two;

echo "Reversing a linked list...\n";
echo "[1]->[2]->[3]->[4]->[5]\n";

$reverse = reverse($one);
$working = $reverse;

while($working != null){
    echo "[$working->data]";
    $working = $working->next;
}

echo "\nAll done!\n";