<?php
//ex:1
class Node{
    public $data;
    public? Node $next;

    public function __construct($data=null,$next=null)
    {
        $this->data=$data;
        $this->next=$next;
    }
}

class Linked_List{
    public? Node $head;
    public function __construct()
    {
        $this->head=null;
    }

    public function print(){
        $temp=new Node();
        $temp=$this->head;
        while ($temp != null){
         echo   $temp->data;
         if ($temp->next != null)
             echo " -> ";
         $temp=$temp->next;
        }
    }
}
// to use
/*
 * $list = new Linked_List();

$first = new Node(10);
$list->head = $first;
$first->next=$second=new Node(20);
$second->next=$third=new Node(30);

$list->print();
 * */

//Ex:2
/*
class Node{
    public $data;
    public? Node $next;

    public function __construct($data=null,$next=null)
    {
        $this->data=$data;
        $this->next=$next;
    }
}

class Linked_List{
    public? Node $head;
    public function __construct()
    {
        $this->head=null;
    }

    public function print(){
        $temp=new Node();
        $temp=$this->head;
        while ($temp != null){
            echo   $temp->data;
            if ($temp->next != null)
                echo " -> ";
            $temp=$temp->next;
        }
    }
    public function prepend($value){
        $this->head=new Node($value,$this->head);
        return $this;
    }
}*/
//To Use Ex2
/*
include "array_operation.php";

$list = new Linked_List();

$list->prepend(10)->prepend(20)->prepend(30);

$list->print();
*/

//Ex3
/*
class Node{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data=$data;
        $this->next=null;
    }
}
class Linked_List
{
    public $head;
    public  $tail;
    public function __construct()
    {
        $this->head = null;
    }

    public function print()
    {

        $temp = $this->head;
        while ($temp) {
            echo $temp->data;
            if ($temp=$temp->next)
                echo " -> ";

        }
    }

    public function prepend($value)
    {
        $node=new Node($value);

        if ($this->head==null){
            $this->head=$node;
        }else{
            $node->next=$this->head;
            $this->head=$node;
        }
        return $this;

    }
}

*/
/*
 *
class Node {
    // data stored in this node
    public $data;

    // reference to the next node
    public $next;

    // initialize the node with the given data
    function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}
class SinglyLinkedList {
    // head of the linked list
    public $head;

    // tail of the linked list
    public $tail;

    // initialize the linked list
    function __construct() {
        $this->head = null;
        $this->tail = null;
    }
    function push($data) {
        // create a new node with the given data
        $node = new Node($data);

        // if the list is empty, set the head and tail to the new node
        if ($this->head === null) {
            $this->head = $node;
            $this->tail = $node;
        } else {
            // set the next property of the new node to the current head
            $node->next = $this->head;

            // set the head of the list to the new node
            $this->head = $node;
        }
    }
    function traverse() {
        // set current to the head
        $current = $this->head;

        // loop through the list
        while ($current) {
            // print the data element of the current node
            echo $current->data;

            // set the current variable to the next node
            // if not null, print an arrow
            if ($current = $current->next) {
                echo " -> ";
            }
        }
        echo "\n";
    }
}
 * */