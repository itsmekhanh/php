<?php

class LinkedListNode{
    public $data;
    public $next;

    public function __construct($data, $next = null){
        $this->data = $data;
        $this->next = $next;
    }

    public function __toString(){
        return "[".$this->data."]";
    }
}

class LinkedList{
    private $head;

    public function __construct(){
        $this->head = null;
    }

    public function append($data){
        $node = new LinkedListNode($data);

        if(isset($this->head)){
            $w = $this->head;
            while($w->next != null){
                $w = $w->next;
            }
            $w->next = $node;
        }else{
            $this->head = $node;
        }
    }

    public function appendByArray($data){
        if(!empty($data)){
            foreach($data as $value){
                $this->append($value);
            }
        }
    }

    public function remove($data){
        if($this->head->data == $data){
            if(isset($this->head->next)){
                $this->head = $this->head->next;
            }
        }else{
            $prev = $this->head;
            $w = $this->head->next;

            while($w->next != null){
                if($w->data == $data){
                    $w->data = $w->next->data;
                    $w->next = $w->next->next;
                    return true;
                }
                $prev = $w;
                $w = $w->next;
            }
            if($w->data == $data){
                $prev->next = $w->next;
                return true;
            }
        }
        return false;
    }

    public function reverse(){
        $w = $this->head;
        $prev = null;

        while($w->next != null){
            $next = $w->next;
            $w->next = $prev;
            $prev = $w;
            $w = $next;
        }
        $w->next = $prev;
        $this->head = $w;
    }

    public function printList(){
        $w = $this->head;

        while(isset($w)){
            echo $w;
            $w = $w->next;
        }
        echo "\n";
    }
}