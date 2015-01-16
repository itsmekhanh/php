<?php
/**
 * This is a class for the LinkedList data structure
 */

class LinkedListNode{
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
    }
}

class LinkedList{
    public $head;
    private $count;

    public function __construct(){
        $this->head = null;
        $this->count = 0;
    }

    public function append($data){
        if($this->head == null){
            $this->head = new LinkedListNode($data);
        }else{
            $w = $this->head;
            while($w->next != null){
                $w = $w->next;
            }
            $w->next = new BinaryTreeNode($data);
        }
        $this->count++;
    }

    public function remove($data){
        
    }
}

