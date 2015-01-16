<?php

require_once ("LinkedList.php");

class Queue{
    private $head;
    private $tail;
    private $count;

    public function __construct(){
        $this->count = 0;
    }

    public function enqueue($data){
        $node = new LinkedListNode($data);
        if($this->head == null){
            $this->head = $node;
            $this->tail = $node;
        }else{
            $this->tail->next = $node;
            $this->tail = $node;
        }
        $this->count++;
    }

    public function dequeue(){
        $node = $this->head;
        $this->head = $this->head->next;

        if(isset($node)){
            $this->count--;
            return $node->data;
        }
        return null;
    }

    public function count(){
        return $this->count;
    }

    public function top(){
        return $this->head->data;
    }

    public function isEmpty(){
        return $this->count == 0;
    }
}