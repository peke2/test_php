<?php
class A
{
	static $name = "ClassA";

	public function test()
	{
		echo "class A test()\n";
		echo "static->".static::$name;	//	�p����̃N���X(ClassB)
		echo "\n";
		echo "self  ->".self::$name;	//	���g�̃N���X(ClassA)
		echo "\n";
	}
}


class B extends A
{
	static $name = "ClassB";

	public function testB()
	{
		echo "class B testB()\n";
		echo "static->".static::$name;	//	�p����̃N���X(ClassB)
		echo "\n";
		echo "self  ->".self::$name;	//	���g�̃N���X(ClassB)
		echo "\n";
	}
}


$cl = new B;

$cl->test();
$cl->testB();
