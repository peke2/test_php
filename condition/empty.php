<?php
//	空文字の判定
//	C言語では null か 非null の判定に使う形式をチェック
//	空の文字列はどのように判定されるか？
//	実体はあるので null じゃないから「Not Empty」になると思ったが違った

printf("---- str = ''\n");
$str = '';
print_r( ($str)? 'Not empty' : 'Empty' );			//	「Empty」になる
printf("\n");

print_r( ($str != null)? 'Not empty' : 'Empty' );	//	「Empty」になる
printf("\n");

printf("---- str = null\n");
$str = null;
print_r( ($str)? 'Not empty' : 'Empty' );			//	「Empty」になる
printf("\n");

print_r( ($str != null)? 'Not empty' : 'Empty' );	//	「Empty」になる
printf("\n");

