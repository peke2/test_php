<?php

//	自動で対象のファイルをインクルードする
//	以下の例では、「クラス名 == ファイル名」であることが必要
spl_autoload_register(function($class_name){
	include $class_name . '.php';
});

$test = new myclass();
echo $test->say();
