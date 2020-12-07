<?php 

//栈   先进后出
//$stack->push()//进栈   $stack->pop()//栈末的元素   $stack->count()//栈类元素数量   $stack->top()//栈顶的元素     

$stack = new Splstack();
for ($i=0; $i < 10; $i++) { 
	$stack->push($i."<br/>");
}

foreach ($stack as $key => $value) {
	echo $value;
}

//队列  先进先出
//$queue->enqueue()//进队列    $queue->dequeue()//出队列

$queue = new Splqueue();

for ($i=10; $i < 20; $i++) { 
	$queue->enqueue($i."<br/>");
}

foreach ($queue as $key => $value) {
	echo $value;
}

//规定数组长度  规定参数之后会创建此长度数组   数组下标不论是否赋值都会存在

$array = new SplFixedArray(10);

$array[1] = '12345';
$array[3] = '1234567';
$array[5] = '123456789';
$array[7] = '12345678910';
$array[9] = '1234567891011';

echo "<pre/>";
print_r($array);
