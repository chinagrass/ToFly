<?php
/**入口文件*/
define('BASEDIR',__DIR__);
include BASEDIR.'/Itofly/Loader.php';
spl_autoload_register('\\Itofly\\Loader::autoload');

/*//栈 先进后出
$stack = new SplStack();
$stack->push("data1\n");
$stack->push("data2\n");
echo $stack->pop();
echo $stack->pop();

//队列 先进先出，后进后出
$queue = new SplQueue();
$queue -> enqueue("queue1\n");
$queue -> enqueue("queue2\n");
echo $queue->dequeue();
echo $queue->dequeue();

//最小堆
$heap = new SplMinHeap();
$heap -> insert("heap1\n");
$heap -> insert("heap2\n");
echo $heap -> extract();
echo $heap -> extract();

//固定长度数组
$array = new SplFixedArray(10);
$array[0] = 1;
$array[9] = 333;
var_dump($array);

$object = new \Itofly\Object();
$object -> title='hello';
echo $object -> title;
echo $object -> test();
echo $object::test();
echo $object;
echo $object();*/
$db = \Itofly\Factory::createDatabase();