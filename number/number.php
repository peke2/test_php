<?php

//32bitを越えた場合の数値の扱いはどうなるか？
//32bit環境での動作が前提

echo "----\n";
$n = 2147483647;
$s = '2147483647';
var_dump(intval($n));	//int(2147483647)
var_dump(intval($s));	//int(2147483647)

echo "----\n";
$n = 2147483648;
$s = '2147483648';
var_dump($n);			//float(2147483648)
var_dump(intval($n));	//int(-2147483648)
var_dump(intval($s));	//int(2147483647)

echo "----\n";
$n = 4294967295;
$s = '4294967295';
var_dump($n);			//float(4294967295)
var_dump(intval($n));	//int(-1)
var_dump(intval($s));	//int(2147483647)

echo "----\n";
$n = 9999999999;
$s = '9999999999';
var_dump($n);			//float(9999999999)
var_dump(intval($n));	//int(1410065407)
var_dump(intval($s));	//int(2147483647)

echo "----\n";
$n = 4500000000.2345;
$s = '4500000000.2345';
var_dump($n);			//float(4500000000.2345)
var_dump(intval($n));	//int(205032704)
var_dump(intval($s));	//int(2147483647)

echo "----\n";
$n = 1.2345678901234567890123456789;
$s = strval($n);
var_dump($n);			//float(1.2345678901235)
var_dump(intval($n));	//int(1)
var_dump(intval($s));	//int(1)

echo "----\n";
$n = 12345678901234567890123456789;
$s = strval($n);
var_dump($n);			//float(1.2345678901235E+28)
var_dump($s);			//string(19) "1.2345678901235E+28"
var_dump(intval($n));	//int(0)
var_dump(intval($s));	//int(1)

