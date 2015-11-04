<?php
//	引数を配列の参照で渡してみる

function increase(&$arg)
{
	$arg['count'] += 1;
}

$arg = [
	'comment'	=> '配列渡しとオブジェクト渡しでどちらが速いのか確認する',
	'count'		=> 0,
	'param' => [
		'a' => 1,
		'b' => 2,
		'c' => 3,
		'd' => 4,
		'e' => 5,
	],
];


for($i=0; $i<10000000; $i++)
//for($i=0; $i<100000; $i++)
{
	increase($arg);
}

printf("結果=%d\n", $arg['count']);

