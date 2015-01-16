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

class DoublyLinkedListNode{
    public $data;
    public $next;
    public $prev;

    public function __construct($data){
        $this->data = $data;
    }
}

class DoublyLinkedList{
    private $head;

    public function __construct(){
        $this->head = null;
    }

    public function append($data){
        if($this->head == null){
            $this->head = new DoublyLinkedListNode($data);
        }else{
            $w = $this->head;
            while($w->next != null){
                $w = $w->next;
            }
            $node = new DoublyLinkedListNode($data);
            $w->next = $node;
            $node->prev = $w;
        }
        $this->count++;
    }
}

class LinkedList{
    private $head;
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
            $w->next = new LinkedListNode($data);
        }
        $this->count++;
    }

    public function remove($data){

        if($this->head->data == $data){
            $this->head = $this->head->next;
            $this->count--;
            return true;
        }

        $w = $this->head->next;
        $prev = $this->head;

        while($w != null){
            if($w->data == $data){
                $prev->next = $w->next;
                $this->count--;
                return true;
            }
            $prev = $w;
            $w = $w->next;
        }
        return false;
    }

    public function popHead(){

    }

    public function popTail(){

    }

    public function getReverse(){

        $w = $this->head;
        $prev = null;

        while($w->next != null){
            $next = $w->next;
            $w->next = $prev;
            $prev = $w;
            $w = $next;
        }

        $w->next = $prev;
        return $w;
    }

    public function reverse(){
        $this->head = $this->getReverse();
    }

    public function createListFromArray($values){
        $this->head = null;
        foreach($values as $v){
            $this->append($v);
        }
    }

    public function printList(){
        $w = $this->head;

        $string = "";
        while($w != null){
            $string .= "[$w->data]";
            $w = $w->next;
        };

        return $string;
    }
}

