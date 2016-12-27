<?php

//	演算子の動作確認
//	C言語の場合、gcc、clang、VisualStudio で結果が異なっていた
//	PHPの場合、clangと同じ結果になった

	$i=0;
	$a=++$i + ++$i;
	$i=0;
	$b=++$i + $i++;
	$i=0;
	$c=$i++ + ++$i;
	$i=0;
	$d=$i++ + $i++;
	$i=0;

	printf("%d,%d,%d,%d\r",$a,$b,$c,$d);	//3,2,2,1
