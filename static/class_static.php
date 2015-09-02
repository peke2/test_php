<?php
class A
{
	static $name = "ClassA";

	public function test()
	{
		echo "class A test()\n";
		echo "static->".static::$name;	//	継承先のクラス(ClassB)
		echo "\n";
		echo "self  ->".self::$name;	//	自身のクラス(ClassA)
		echo "\n";
	}
}


class B extends A
{
	static $name = "ClassB";

	public function testB()
	{
		echo "class B testB()\n";
		echo "static->".static::$name;	//	継承先のクラス(ClassB)
		echo "\n";
		echo "self  ->".self::$name;	//	自身のクラス(ClassB)
		echo "\n";
	}
}


$cl = new B;

$cl->test();
$cl->testB();
