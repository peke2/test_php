<?php
//	クラス(オブジェクト)で引数を渡し、内容を更新
//	内容の反映を明示するため戻り値で更新を反映する

class Param
{
	var $comment = '配列渡しとオブジェクト渡しでどちらが速いのか確認する';
	var $count= 0;
	var $param = [
		'a' => 1,
		'b' => 2,
		'c' => 3,
		'd' => 4,
		'e' => 5,
	];
}


function increase($arg)
{
	$arg->count += 1;
	return	$arg;
}

$arg = new Param();

for($i=0; $i<10000000; $i++)
//for($i=0; $i<100000; $i++)
{
	$arg = increase($arg);
}

printf("結果=%d\n", $arg->count);

