<?php

require_once "LinkedList.php";

class Stack{
    private $count;
    private $head;

    public function __construct(){
        $this->count = 0;
        $this->head = null;
    }

    public function top(){
        if(isset($this->head)){
            return $this->head->data;
        }
    }

    public function push($data){
        $node = new LinkedListNode($data);
        if(isset($this->head)){
            $node->next = $this->head;
            $this->head = $node;
        }else{
            $this->head = $node;
        }
        $this->count++;
        return true;
    }

    public function pop(){
        if(isset($this->head)){
            $data = $this->head->data;
            $this->head = $this->head->next;
            $this->count--;
            return $data;
        }else{
            return null;
        }
    }

    public function isEmpty(){
        return $this->count == 0;
    }

    public function sort(){
        $stack = new Stack();

        while(!$this->isEmpty()){
            $data = $this->pop();

            if($stack->isEmpty()){
                $stack->push($data);
            }else{
                while(!$stack->isEmpty() && $stack->top() < $data){
                    $this->push($stack->pop());
                }
                $stack->push($data);
            }
        }
        return $stack;
    }

    public function printStack(){
        if(isset($this->head)){
            $w = $this->head;
            while($w != null){
                echo "[$w->data]";
                $w = $w->next;
            }
        }else{
            echo "This stack is empty!\n";
        }
    }

    public function populate($A){
        foreach($A as $value){
            $this->push($value);
        }
    }
}

