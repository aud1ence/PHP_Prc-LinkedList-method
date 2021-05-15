<?php

include_once "vendor/autoload.php";
use App\LinkedList;
use App\Node;

$test = new LinkedList;
$arr = [99, 88, 77 ,66];
//for ($i = 0; $i < 5; $i++) {
//    array_push($arr, rand(1, 100));
//}
//$test1 = new Node($arr);
//$test->addFirst($test1);
//$copy = clone $test;
//$test->remove(1);
////var_dump($test->printList());
//echo $test->size();
//var_dump($copy);
$test->addFirst(1);
$test->addFirst(2);
$test->addFirst(3);
$test->addFirst(4);
//echo "<pre>";
//var_dump($test->get(1)); ;
//echo "</pre>";
//echo $test->size();
var_dump($test->printList());
var_dump($test->get(6));


$test->addFirst(22);
echo $test->size();
$test->removeObj(3);
echo $test->size();

$test->removeObj(2);
echo $test->size();
var_dump($test->printList());
echo $test->contains(22);
//var_dump($test->get(2));
echo $test->indexOf(1);
