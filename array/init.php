<?php

//	配列の初期化忘れの確認
//	ループ内で使用したワークの内容は、そのまま次のループ内でも残っているのか？ → 【結論】残る
$a = [];
for($i=0; $i<3; $i++)
{
	$work['a'] = $i;
	$work['b'] = 'Hello';	//	ここで'b'に値をセット
	$a[] = $work;
}

printf(var_export($a, true));

//	同じワークを使用する
for($i=4; $i<7; $i++)
{
	$work['a'] = $i;
//	$work['b'] = 'Hello';	//	ここでは'b'をセットしない
	$a[] = $work;
}

//	要素'b'は直前のループ内でセットされた内容がそのまま残る…
printf(var_export($a, true));
