<?php
/**
 * Write a function to find the distance of 2 BST nodes given the root and the two nodes
 */

echo phpinfo();

//include_once ("./structures/BinaryTree.php");
//
//function distance($node, $a, $b, $height = 0){
//    $heights = array();
//    if($node == $a){
//        $heights[] = $height;
//    }
//    else if ($node == $b){
//        $heights[] = $height;
//    }
//
//    if(isset($node->left)){
//        $left = distance($node->left, $a, $b, $height+1);
//        if(is_array($left)){
//            $heights = array_merge($heights, $left);
//        }else if(is_numeric($left)){
//            return $left;
//        }
//    }
//    if(isset($node->right)){
//        $right = distance($node->right, $a, $b, $height+1);
//
//        if(is_array($right)){
//            $heights = array_merge($heights, $right);
//        }else if(is_numeric($right)){
//            return $right;
//        }
//    }
//
//    if(count($heights) == 2){
//        return abs($heights[0]-$heights[1]);
//    }
//    return $heights;
//}
//
//echo "Testing distance between two nodes...\n";
//$tree =<<<STRING
//..........[20]..........
//.......[10]  [30]........
//.....[5][15] [25][40]....
//STRING;
//
//$twenty = new BinaryTreeNode(20);
//$ten = new BinaryTreeNode(10);
//$five = new BinaryTreeNode(5);
//$fifteen = new BinaryTreeNode(15);
//$thirty = new BinaryTreeNode(30);
//$twentyfive = new BinaryTreeNode(25);
//$forty = new BinaryTreeNode(40);
//
//$twenty->left = $ten;
//$twenty->right = $thirty;
