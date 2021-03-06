<?php

require_once("Queue.php");

class BinaryTreeNode{
    public $data;
    public $left;
    public $right;
    
    public function __construct($data){
        $this->data = $data;
    }
}

class BinaryTree{
    protected $root;

    public function __construct(){
        $root = null;
    }

    public function insert($data){

        $newNode = new BinaryTreeNode($data);

        if($this->root == null){
            $this->root = $newNode;
            return true;
        }

        // use BFS
        $queue = new Queue();
        $queue->enqueue($this->root);

        while(!$queue->isEmpty()){
            $node = $queue->dequeue();

            if($node->left == null){
                $node->left = $newNode;
                return true;
            }else{
                $queue->enqueue($node->left);
            }


            if($node->right == null){
                $node->right = $newNode;
                return true;
            }else{
                $queue->enqueue($node->right);
            }
        }
        return false;
    }

    public function remove($data){
        $queue = new Queue();
        $queue->enqueue($this->root);

        while(!$queue->isEmpty()){
            $node = $queue->dequeue();

            if($node->data == $data){
                // now find node to replace
                if(isset($node->right)){
                    $replace = $node->right;
                    while($replace->left != null){
                        $prev = $replace;
                        $replace = $replace->left;
                    }

                    $node->data = $replace->data;

                    // there was a left node
                    if(isset($prev)){
                        $prev->left = $replace->right;

                    }else{
                        // there was no left node
                        $node->right = $replace->right;
                    }
                }
            }

            if(isset($node->left)){
                $queue->enqueue($node->left);
            }
            if(isset($node->right)){
                $queue->enqueue($node->right);
            }
        }

    }

    public function printInorder($node = null){
        if($node == null){
            $node = $this->root;
        }

        if($node->left != null){
            $this->printInorder($node->left);
        }

        echo "[$node->data]";

        if($node->right != null){
            $this->printInorder($node->right);
        }
    }

    public function printPreorder($node = null){
        if($node == null){
            $node = $this->root;
        }

        echo "[$node->data]";

        if($node->left != null){
            $this->printInorder($node->left);
        }

        if($node->right != null){
            $this->printInorder($node->right);
        }
    }

    public function printPostorder($node = null){
        if($node == null){
            $node = $this->root;
        }

        if($node->left != null){
            $this->printInorder($node->left);
        }
        if($node->right != null){
            $this->printInorder($node->right);
        }
        echo "[$node->data]";
    }

    public function distance($a, $b, $node=null, $height=0){
        if($node == null){
            $node = $this->root;
        }

        $heights = array();

        if($node->data == $a || $node->data == $b){
            $heights[] = $height;
        }

        if($node->left != null){
            $left = $this->distance($a, $b, $node->left, $height+1);

            if(is_array($left) && !empty($left)){
                $heights = array_merge($heights, $left);
            }else if(is_numeric($left)){
                return $left;
            }
        }

        if($node->right != null){
            $right = $this->distance($a, $b, $node->right, $height+1);

            if(is_array($right) && !empty($right)){
                $heights = array_merge($heights, $right);
            }else if(is_numeric($right)){
                return $right;
            }
        }

        if(count($heights) == 2){
            return abs($heights[0]+$heights[1]-(2*$height));
        }
        return $heights;
    }

    public function isBST($node=null, $max=PHP_INT_MAX, $min = -1){
        if($node == null){
            $node = $this->root;
        }

        if($node->data > $max || $node->data < $min) return false;

        $left = true; $right = true;

        if($node->left != null){
            $left = $this->isBST($node->left, $node->data, $min);
        }
        if($node->right != null){
            $right = $this->isBST($node->right, $max, $node->data);
        }

        return $left && $right;
    }

    public function createTreeFromArray($A){
        foreach($A as $a){
            $this->insert($a);
        }
    }
}

class BinarySearchTree extends BinaryTree{

    public function insert($data){
        $node = new BinaryTreeNode($data);

        if($this->root == null){
            $this->root = $node;
            return true;
        }
        else{
            $w = $this->root;
            while($w != null){
                if($data < $w->data){
                    if(isset($w->left)){
                        $w = $w->left;
                    }else{
                        $w->left = $node;
                        return true;
                    }
                }else{
                    if(isset($w->right)){
                        $w = $w->right;
                    }else{
                        $w->right = $node;
                        return true;
                    }
                }
            }
        }
        return false;
    }
}