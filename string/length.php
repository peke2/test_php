<?php

//全角は何文字にカウントされるのか確認
//utf8だと「3文字」
//utf8を含む文字数をカウントする場合は「mb_strlen」を使用する
//ちなみに「str_word_count」は英単語の数をカウントする

$list = array("あいうえお","abcdef","あ123", "This is a pen.");

foreach($list as $a)
{
	printf("len  :%s->%d\n", $a, strlen($a));
	printf("mblen:%s->%d\n", $a, mb_strlen($a));
	printf("word :%s->%d\n", $a, str_word_count($a));
}
