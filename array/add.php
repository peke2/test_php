<?php

//配列の加算確認

$total = [];

$a['param'] = ['a','b','c'];
$total = $total + $a;

$b['param'] = ['x','y','z'];
$total = $total + $b;

//【結果】同じkeyだと追加できない	→	配列がマージされるわけではない
//Array
//(
//    [param] => Array
//        (
//            [0] => a
//            [1] => b
//            [2] => c
//        )
//
//)
print_r($total);


$b['param2'] = ['x','y','z'];
$total = $total + $b;

//【結果】keyが異なれば追加される
//Array
//(
//    [param] => Array
//        (
//            [0] => a
//            [1] => b
//            [2] => c
//        )
//
//    [param2] => Array
//        (
//            [0] => x
//            [1] => y
//            [2] => z
//        )
//
//)
print_r($total);


$total = [];
$c['param'] = [];
$d['param'] = ['x','y','z'];
$total = $total + $c;
$total = $total + $d;

//【結果】空の配列でもkeyが同じならば上書きされない
//Array
//(
//    [param] => Array
//        (
//        )
//
//)
print_r($total);

