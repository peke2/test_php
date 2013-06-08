<?php

//	パスの確認
echo	"dirname = ".dirname(__FILE__)."\n";
echo	"getcwd  = ".getcwd()."\n";

//require("../inc.php");	//	相対パスだと実行時のカレントディレクトリに依存するので失敗することもある
require( dirname(__FILE__)."/../inc.php" );	//	ファイルの絶対パスを基準に読み込めば、カレントディレクトリに依存しない読み込みが可能

?>