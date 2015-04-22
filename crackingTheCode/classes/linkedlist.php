<?php

class LinkedListNode{
    public $data;
    public $next;

    public function __construct($data, $next = null){
        $this->data = $data;
        $this->next = $next;
    }
}

class LinkedList{
    private $head;

    public function __construct($data){
        if(!isset($this->head)){
            $this->head = new LinkedListNode($data);
        }
    }
}