<?php

//	リフレクションでprivateメソッドを使う

class Test
{
	static private function static_private_func() : string
	{
		return 'Hello';
	}

	private function private_func() : string
	{
		return 'World';
	}
}


$test = new ReflectionMethod('Test', 'static_private_func');
$test->setAccessible(true);
echo $test->invoke(null);		//	staticなメソッドの呼び出しはインスタンス不要

echo "\n";

$test = new ReflectionMethod('Test', 'private_func');
$test->setAccessible(true);
echo $test->invoke(new Test);	//	メソッドの呼び出しにはクラスのインスタンスを指定


//preg_match('/[abcdef]+/', 'urtyDaog', $matches);
//print_r($matches);


