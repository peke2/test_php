<?php

$a = ['a'=>1, 'b'=>0, 'c'=>null];
$b = [];
$c = '';

//	issetの挙動確認
//	「null」や存在しない配列の要素や未初期化の変数をチェック可能
echo "----isset\n";
var_dump(isset($a['a']));	//bool(true)	何か値がある
var_dump(isset($a['b']));	//bool(true)	0
var_dump(isset($a['c']));	//bool(false)	null
var_dump(isset($a['d']));	//bool(false)	存在しない要素
var_dump(isset($b));		//bool(true)	空の配列
var_dump(isset($c));		//bool(true)	空の文字列
var_dump(isset($d));		//bool(false)	存在しない変数

echo "----empty\n";
//	emptyの挙動確認
//	明示的な値が設定されていなければ「空」とみなす
var_dump(empty($a['a']));	//bool(false)	何か値がある
var_dump(empty($a['b']));	//bool(true)	0
var_dump(empty($a['c']));	//bool(true)	null
var_dump(empty($a['d']));	//bool(true)	存在しない要素
var_dump(empty($b));		//bool(true)	空の配列
var_dump(empty($c));		//bool(true)	空の文字列
var_dump(empty($d));		//bool(true)	存在しない変数

echo "----(!)\n";
//	ちなみにC言語とかでよくやる判定を確認
var_dump(!$a['a']);			//bool(false)		何か値がある
var_dump(!$a['b']);			//bool(true)		0
var_dump(!$a['c']);			//bool(true)		null
var_dump(!$a['d']);			//Undefined index	存在しない要素	->bool(true) にはなる
var_dump(!$b);				//bool(true)		空の配列
var_dump(!$c);				//bool(true)		空の文字列
var_dump(!$d);				//Undefined index	存在しない変数	->bool(true) にはなる

