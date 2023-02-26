<?php
include "array_operation.php";

/*$list=new Linkedlist();

$a=$list->prepend('A');
$list->print();

$b=$list->prepend('B');
$list->print();*/


//include "array_operation.php";
/*
$list=new SinglyLinkedList();
$list->push(10);
$list->push(20);
$list->push(30);

$list->traverse();
*/
$list = new Linked_List();

$first = new Node(10);
$list->head = $first;
$first->next=$second=new Node(20);
$second->next=$third=new Node(30);

$list->print();