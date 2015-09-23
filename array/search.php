<?php

//	配列内の検索確認
$index = array_search("abc", array("aaa", "bbb", "abc"));
printf("index=%d\n", $index);

//	対象がない場合は「false」が返る
$index = array_search("abc", array("aaa", "bbb", "ccc"));
var_export($index);
