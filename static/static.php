<?php

class Test
{
	private static $test_array = array();
//	private static $test_array;

	public static function call($index, $value)
	{
		self::$test_array[$index] = $value;
	}

	public static function output()
	{
		var_dump(self::$test_array);
	}

}
